/*
	181.16 points.
*/

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PrimalUnlicensedCreatures
{
    class PrimalUnlicensedCreatures
    {
        int maxWins(int initialLevel, int[] grezPower)
        {
            int currentLevel = initialLevel;
            int winCount = 0;
            Array.Sort(grezPower);
            for (int i = 0; i < grezPower.Length; i++)
            {
                if (currentLevel > grezPower[i])
                {
                    currentLevel +=  (int) Math.Floor(grezPower[i] / 2.0);
                    winCount++;
                }
            }
            return winCount;
        }

        static void Main(string[] args)
        {
            PrimalUnlicensedCreatures obj = new PrimalUnlicensedCreatures();
            //int initialLevel = 31;
            //int[] grezPower = { 10, 20, 30 };

            //int initialLevel = 20;
            //int[] grezPower = { 24, 5, 6, 38 };

            //int initialLevel = 20;
            //int[] grezPower = { 3, 3, 3, 3, 3, 1, 25 };

            //int initialLevel = 4;
            //int[] grezPower = { 3, 13, 6, 4, 9 };

            int initialLevel = 7;
            int[] grezPower = { 7, 8, 9, 10 };

            Console.WriteLine(obj.maxWins(initialLevel, grezPower));
            Console.ReadLine();
        }
    }
}
