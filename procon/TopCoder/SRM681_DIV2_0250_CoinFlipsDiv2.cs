using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CoinFlipsDiv2
{
    class CoinFlipsDiv2
    {
        public int countCoins(string state)
        {
            int len = state.Length;
            string cur = "";
            string prv = "";
            string nxt = "";
            int ans = 0;

            for (int i = 0; i < len; i++)
            {
                cur = state.Substring(i, 1);
                if (0 < i)
                {
                    prv = state.Substring(i - 1, 1);
                }
                if (i + 1 < len)
                {
                    nxt = state.Substring(i + 1, 1);
                }

                //Console.Write(prv + cur + nxt + ans);

                if ( ( prv != cur && prv != "") || ( nxt != cur && nxt != "" ) )
                {
                    ans++;
                }
                //Console.WriteLine();

                prv = "";
                nxt = "";
            }
            return ans;

        }

        static void Main(string[] args)
        {
            CoinFlipsDiv2 obj = new CoinFlipsDiv2();
            //string state = "HT";
            //string state = "T";
            //string state = "HHH";
            //string state = "HHTHHH";
            string state = "HHHTTTHHHTTTHTHTH";

            Console.WriteLine(obj.countCoins(state));
            Console.ReadLine();
        }
    }
}
