using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

    // Submission was successful for 214.56 points.

    class BearCheats
    {
        public string eyesight(int A, int B)
        {
            string castA = A.ToString();
            string castB = B.ToString();
            int wrong = 0;

            for (int i = 0; i < castA.Length; i++ )
            {
                if (castA[i] != castB[i])
                {
                    wrong++;
                }
            }

            if (wrong <= 1)
            {
                return "happy";
            } else
            {
                return "glasses";
            }
        }
    }
