using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace UpDownHiking
{
    class UpDownHiking
    {
        static void Main(string[] args)
        {
            UpDownHiking obj = new UpDownHiking();
            //int N = 3;
            //int A = 7;
            //int B = 10;

            //int N = 5;
            //int A = 40;
            //int B = 30;

            //int N = 2;
            //int A = 50;
            //int B = 1;

            //int N = 2;
            //int A = 1;
            //int B = 50;

            //int N = 3;
            //int A = 42;
            //int B = 42;

            int N = 20;
            int A = 7;
            int B = 9;

            Console.WriteLine(obj.maxHeight(N, A, B));
            Console.ReadLine();
        }

        public int maxHeight(int N, int A, int B)
        {
            int ans = 0;
            int upMax = 0;
            int downMax = 0;
            int dist = 0;

            for (int i = 1; i < N; i++)
            {
                upMax = i * A;
                downMax = (N - i) * B;
                dist = Math.Min(upMax, downMax);
                ans = Math.Max(ans, dist);
            }
            
            return ans;

        }
    }

}
