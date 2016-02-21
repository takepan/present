/*
    Succeeded.
    121.73 pts
*/

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ListeningSongs
{
    class ListeningSongs
    {
        public int listen(int[] durations1, int[] durations2, int minutes, int T)
        {
            int d1l = durations1.Length;
            int d2l = durations2.Length;
            int cursor1 = T;
            int cursor2 = T;
            int seconds = minutes * 60;
            int current1 = 0;
            int current2 = 0;
            int answer = 0;

            if (d1l < T || d2l < T)
            {
                return -1;
            }
            Array.Sort(durations1);
            Array.Sort(durations2);

            for (int i = 0; i < T; i++)
            {
                if (durations1[i] > seconds)
                {
                    return -1;
                }
                seconds -= durations1[i];
                answer++;
                if (durations2[i] > seconds)
                {
                    return -1;
                }
                seconds -= durations2[i];
                answer++;
            }

            while (true)
            {
                current1 = Int32.MaxValue;
                current2 = Int32.MaxValue;
                if (cursor1 < d1l)
                {
                    current1 = durations1[cursor1];
                }
                if (cursor2 < d2l)
                {
                    current2 = durations2[cursor2];
                }
                if (current1 == Int32.MaxValue && current2 == Int32.MaxValue)
                {
                    return answer;
                }
                // Console.WriteLine("DATA: " + current1 + " " + current2);
                if (current1 < current2)
                {
                    if (seconds < current1)
                    {
                        return answer;                        
                    } else
                    {
                        seconds -= current1;
                        cursor1++;
                        answer++;
                    }
                } else
                {
                    if (seconds < current2)
                    {
                        return answer;
                    }
                    else
                    {
                        seconds -= current2;
                        cursor2++;
                        answer++;
                    }
                }
                // Console.WriteLine(answer + " " + seconds);
                for (int i = 0; i < 100000000; i++) { };
            }


        }

        static void Main(string[] args)
        {
            //int[] durations1 = { 300,200,100};
            //int[] durations2 = { 400,500,600};
            //int minutes = 17;
            //int T = 1;

            //int[] durations1 = { 300, 200, 100 };
            //int[] durations2 = { 400, 500, 600 };
            //int minutes = 10;
            //int T = 1;

            //int[] durations1 = { 60, 60, 60 };
            //int[] durations2 = { 60, 60, 60 };
            //int minutes = 5;
            //int T = 2;

            //int[] durations1 = { 120, 120, 120, 120, 120 };
            //int[] durations2 = { 60, 60, 60, 60, 60, 60 };
            //int minutes = 10;
            //int T = 3;

            //int[] durations1 = { 196, 147, 201, 106, 239, 332, 165, 130, 205, 221, 248, 108, 60 };
            //int[] durations2 = { 280, 164, 206, 95, 81, 383, 96, 255, 260, 244, 60, 313, 101 };
            //int minutes = 60;
            //int T = 3;

            //int[] durations1 = { 100, 200, 300 };
            //int[] durations2 = { 100, 200, 300 };
            //int minutes = 2;
            //int T = 1;

            int[] durations1 = { 100, 200, 300, 400, 500, 600 };
            int[] durations2 = { 100, 200 };
            int minutes = 1000;
            int T = 3;

            ListeningSongs obj = new ListeningSongs();
            Console.WriteLine(obj.listen(durations1, durations2, minutes, T));
            Console.ReadLine();
        }
    }
}
