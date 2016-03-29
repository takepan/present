using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

	// 215.46 pts

    class TreeAndVertex
    {
        public int get(int[] tree)
        {
            int[] num = new int[tree.Length + 1];
            for (int i = 1; i <= tree.Length; i++)
            {
                num[i]++;
                num[tree[i-1]]++;
            }
            return num.Max();
        }

        static void Main(string[] args)
        {
            TreeAndVertex obj = new TreeAndVertex();
            //int[] tree = { 0, 0, 0 };
            //int[] tree = { 0, 1, 2, 3 };
            //int[] tree = { 0, 0, 2, 2 };
            //int[] tree = { 0, 0, 0, 1, 1, 1 };
            int[] tree = { 0, 1, 2, 0, 1, 5, 6, 1, 7, 4, 2, 5, 5, 8, 6, 2, 14, 12, 18, 10, 0, 6, 18, 2, 20, 11, 0, 11, 7, 12, 17, 3, 18, 31, 14, 34, 30, 11, 9 };

            Console.WriteLine(obj.get(tree));
            Console.ReadLine();
        }
    }
