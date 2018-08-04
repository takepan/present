using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MakePalindrome
{
    class MakePalindrome
    {

        public string[] constructMinimal(string card)
        {
            int len = card.Length;

            Dictionary<string, int> data = new Dictionary<string, int>();

            for (int i = 0; i < len; i++) {
                string s = card.Substring(i, 1);
                if (data.ContainsKey(s)) {
                    data[s]++;
                } else {
                    data[s] = 1;
                }
            }

            string[] x = {"", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""};
            int cursor = 0;

            foreach (KeyValuePair<string, int> key in data) {
              Console.WriteLine("{0} : {1}", key.Key, key.Value);
              if (key.Value % 2 == 1) {
                for (int i = 0; i < key.Value; i++) {
                    x[cursor] += key.Key;
                }
                cursor++;
              }
            }

            foreach (KeyValuePair<string, int> key in data) {
              if (key.Value % 2 == 0) {
                for (int i = 0; i < key.Value / 2; i++) {
                    x[0] = key.Key + x[0] + key.Key;
                }
              }
            }

            for (int i = x.Length - 1; i > 0 ; i--) {
                if (x[i] == "") {
                    Array.Resize(ref x, i);
                }
            }

            for (int i = 0; i < x.Length; i++) {
                Console.WriteLine(x[i]);
            }

            return x;

        }

        static void Main(string[] args)
        {
            MakePalindrome obj = new MakePalindrome();
            // string card = "abbaa";
            // string card = "abc";
            // string card = "topcoder";
            // string card = "z";
            string card = "saduhaugfhohfiaschbuioagfoqwjiwefoqhjefiohdogoi";

            Console.WriteLine(obj.constructMinimal(card));
            Console.ReadLine();
        }
    }
}
