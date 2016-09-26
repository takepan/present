using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LastDigit
{
    class LastDigit
    {

        public long findX(long S)
        {
            ulong SS = (ulong)S;
            ulong mmin = 1;
            ulong mmax = (ulong)S;
            ulong mmid = (ulong)Math.Round((mmin + mmax) / 2.0);
            bool b = true;
            ulong prevmin = 0;
            ulong prevmax = 0;
            ulong prevmid = 0;

            while(b)
            {
                if (calc(mmin) == SS) return (long)mmin;
                if (calc(mmax) == SS) return (long)mmax;
                if (mmax - mmin == 1) return -1;
                mmid = (ulong)Math.Floor((mmin + mmax) / 2.0);
                //Console.WriteLine("mmin:" + mmin + " mmax:" + mmax + " mmid:" + mmid);
                //Console.WriteLine(calc(mmid));
                //Console.WriteLine(S);
                //Console.WriteLine();
                if (calc(mmid) == SS)
                {
                    return (long)mmid;
                } else if (calc(mmid) < SS)
                {
                    mmin = mmid;
                } else
                {
                    mmax = mmid;
                }

                if ((prevmid == mmid) && (prevmin == mmin) && (prevmax == mmax))
                {
                    for (ulong i = mmin; i < mmax; i++)
                    {
                        if (calc(i) == SS)
                        {
                            return (long)i;
                        }
                    }
                    return -1;
                }

                prevmid = mmid;
                prevmax = mmax;
                prevmin = mmin;
                //for (int w = 0; w < 100000000; w++) { };

            }
            return 0;

            //long l = S;
            //long ans = 0L;
            //string s = l.ToString();
            //for (int i = 1; i <= s.Length; i++)
            //{
            //    string bit = s.Substring(0, i);
            //    Console.WriteLine(bit);
            //    ans += long.Parse(bit);
            //}

            //Console.WriteLine(calc(SS));
        }

        public ulong calc(ulong S)
        {
            ulong ans = 0L;
            string s = S.ToString();
            for (int i = 1; i <= s.Length; i++)
            {
                string bit = s.Substring(0, i);
                //Console.WriteLine(bit);
                ans += ulong.Parse(bit);
            }

            //Console.WriteLine(ans);

            return ans;
        }


        static void Main(string[] args)
        {
            LastDigit obj = new LastDigit();
            //long S = 999999999999999999;
            long S = 1000000000000000000;
            Console.WriteLine(obj.findX(S));
            Console.ReadLine();
        }
    }
}
