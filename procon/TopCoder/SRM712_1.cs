using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RepeatNumberCompare
{
    class RepeatNumberCompare
    {

        string compare(int x1, int k1, int x2, int k2)
        {
            string s1 = x1.ToString();
            string s2 = x2.ToString();

            int l1 = s1.Length;
            int l2 = s2.Length;

            int keta1 = l1 * k1;
            int keta2 = l2 * k2;

            if (keta1 > keta2) {
                return "Greater";
            } else if (keta1 < keta2) {
                return "Less";
            } else {

                string f1 = "";
                string f2 = "";
                for (int i = 0; i < k1; i++) {
                    f1 += s1;
                }
                for (int i = 0; i < k2; i++) {
                    f2 += s2;
                }

                Console.WriteLine(f1);
                Console.WriteLine(f2);

                for (int i = 0; i < keta1; i++) {
                    string tmp1 = f1.Substring(i, 1);
                    string tmp2 = f2.Substring(i, 1);
                    int num1 = Int32.Parse(tmp1);
                    int num2 = Int32.Parse(tmp2);
                    if (num1 > num2) {
                        return "Greater";
                    }
                    if (num1 < num2) {
                        return "Less";
                    }
                }
                return "Equal";
            }
        }

        static void Main(string[] args)
        {
            RepeatNumberCompare obj = new RepeatNumberCompare();
            // int x1 = 1234;
            // int k1 = 3;
            // int x2 = 70;
            // int k2 = 4;

            // int x1 = 5;
            // int k1 = 9;
            // int x2 = 555555555;
            // int k2 = 1;

            // int x1 = 1010;
            // int k1 = 3;
            // int x2 = 101010;
            // int k2 = 2;

            // int x1 = 1000000000;
            // int k1 = 50;
            // int x2 = 1000000000;
            // int k2 = 50;

            // int x1 = 5;
            // int k1 = 9;
            // int x2 = 555555554;
            // int k2 = 1;

            // int x1 = 5;
            // int k1 = 9;
            // int x2 = 555555556;
            // int k2 = 1;

            Console.WriteLine(obj.compare(x1, k1, x2, k2));
            Console.ReadLine();
        }
    }
}
