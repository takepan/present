/*
    System Test Failed.
*/

using System;
using System.Collections;

namespace BearPair
{
    class BearPair
    {
        public int bigDistance(string s)
        {
            int ans = -1;
            int dist = 0;
            Hashtable ht1 = new Hashtable();
            Hashtable ht2 = new Hashtable();

            for (int i = 0; i < s.Length; i++)
            {
                string ss = s.Substring(i, 1);
                if (!ht1.Contains(ss))
                {
                    ht1[ss] = i;
                    ht2[ss] = i;
                }
                else
                {
                    ht2[ss] = i;
                }
            }
            foreach (DictionaryEntry de1 in ht1)
            {
                foreach (DictionaryEntry de2 in ht2)
                {
                    if ((string)de1.Key == (string)de2.Key) continue;
                    //Console.WriteLine("de1.Key=" + de1.Key + " de1.Value=" + de1.Value + " de2.Key=" + de2.Key + " de2.Value=" + de2.Value);
                    dist = (int)de2.Value - (int)de1.Value;
                   
                    if (dist > ans) ans = dist;
                    //Console.WriteLine(dist + " " + ans);
                }

            }
            return ans;
        }

        static void Main(string[] args)
        {
            BearPair obj = new BearPair();

            string[] s = { "bear", "abcba", "oooohyeahpotato", "zzzzzzzzzzzzzzzzzzzzz", "qw", "xxyyxyxyyyyyyxxxyxyxxxyxyxyyyyyxxxxxxyyyyyyyyxxxxx" };
            int[] expected = { 3, 3, 13, -1, 1, 47 };
            int ans;

            for (int i = 0; i < s.Length; i++)
            {
                ans = obj.bigDistance(s[i]);
                if (ans == expected[i])
                {
                    Console.Write("[--]");
                }
                else
                {
                    Console.Write("[NG]");
                }
                Console.WriteLine(" expected:" + expected[i] + " answer:" + ans + " ");
            }
            Console.ReadLine();
        }
    }
}
