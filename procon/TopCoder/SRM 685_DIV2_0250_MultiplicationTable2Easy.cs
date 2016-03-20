using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MultiplicationTable2Easy
{
    class MultiplicationTable2Easy
    {
        public string isGoodSet(int[] table, int[] t)
        {
            int l = table.Length;
            int n = (int)Math.Sqrt(l);
            for (var i = 0; i < t.Length; i++)
            {
                for (var j = 0; j < t.Length; j++)
                {
                    var ad = table[t[i] * n + t[j]];
                    if (Array.IndexOf(t, ad) == -1)
                    {
                        return "Not Good";
                    }
                }
            }
            return "Good";
        }

        static void Main(string[] args)
        {
            MultiplicationTable2Easy obj = new MultiplicationTable2Easy();

            //int[] table = {
            //    1, 1, 2, 3,
            //    1, 0, 2, 3,
            //    3, 3, 0, 3,
            //    2, 2, 2, 0};
            //int[] t = { 1, 0 };

            //int[] table = {
            //    1, 1, 2, 3,
            //     1, 0, 2, 3,
            //     3, 3, 0, 3,
            //     2, 2, 2, 0};
            //int[] t = { 2, 3 };

            //int[] table = {
            //    1, 1, 2, 3,
            //     1, 0, 2, 3,
            //     3, 3, 0, 3,
            //     2, 2, 2, 0};
            //int[] t = { 0, 1, 2, 3 };

            //int[] table = {
            //    2,2,2,2,2,2,
            //     2,2,2,2,2,2,
            //     2,2,2,2,2,2,
            //     2,2,2,2,2,2,
            //     2,2,2,2,2,2,
            //     2,2,2,2,2,2};
            //int[] t = { 2, 4, 5 };

            int[] table = {
                2,2,2,2,2,2,
                 2,2,2,2,2,2,
                 2,2,2,2,2,2,
                 2,2,2,2,2,2,
                 2,2,2,2,2,2,
                 2,2,2,2,2,2};
            int[] t = { 0, 1, 3, 4, 5 };

            Console.WriteLine(obj.isGoodSet(table, t));
            Console.ReadLine();
        }
    }
}
