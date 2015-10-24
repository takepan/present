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

        int find(string s)
        {
            string t = "";
            string x = "";
            string y = "";

            for (int i = 0; i < s.Length; i++)
            {
                t += s.Substring(s.Length - i - 1, 1);
            }

            //double d = 13.3;
            //int x = (int)Math.Floor(d);

            for (int i = 0 ; i < s.Length; i++)
            {
                x = s.Substring(i, s.Length - i);
                y = t.Substring(0, s.Length - i);
                if (debug) Console.WriteLine("[" + x + "][" + y + "]");

                if (x == y)
                {
                    if (debug) Console.WriteLine("Gotha!");
                    return s.Length * 2 - (s.Length - i);
                }

            }

            if (debug) Console.WriteLine(t);

            return s.Length * 2 - 1;
        }
        static void Main(string[] args)
        {
            ThePalindrome obj = new ThePalindrome();
            //string s = "abab";
            //string s = "abacaba";
            //string s = "qwerty";
            //string s = "abdfhdyrbdbsdfghjkllkjhgfds";
            //string s = "abcc";
            //string s = "abcb";
            string s = "amyulokgckc";   // 19
            



            Console.WriteLine(obj.find(s));
            Console.ReadLine();
        }
    }
}
