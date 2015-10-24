using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ThePalindrome
{
    class ThePalindrome
    {
        bool debug = true;

        public int find(string s)
        {
            int ret = dp(s, s);

            return ret;
        }

        int dp(string original, string s)
        {
            if (debug)
            {
                Console.WriteLine(original + "-" + s);
            }

            char[] chars = s.ToCharArray();
            Array.Reverse(chars);
            var sReverse = new string(chars);

            if (sReverse == s)
            {
                if (debug) Console.WriteLine("Gotha! " + original);
                return original.Length * 2 - s.Length;
            }
            else
            {
                if (s.Length == 1)
                {
                    return original.Length * 2 - 1;
                }
                else
                {
                    int xxx = dp(original, s.Substring(1));
                    return xxx;
                }
            }
        }

        static void Main(string[] args)
        {
            ThePalindrome obj = new ThePalindrome();
            string s = "abab"; // 5
            //string s = "abacaba";
            //string s = "qwerty";  // 11
            //string s = "abdfhdyrbdbsdfghjkllkjhgfds"; // 38
            //string s = "abcc";
            //string s = "abcb";
            //string s = "amyulokgckc";   // 19

            Console.WriteLine(obj.find(s));
            Console.ReadLine();
        }
    }
}
