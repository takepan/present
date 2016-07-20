using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace BearPasswordAny
{
    class BearPasswordAny
    {
        public string findPassword(int[] x) {
            int len = x.Length;
            string ans = "";
            string current = "a";
            int mem = 0;
            bool flag = true;
            // const bool debug = true;
            // const bool debug = false;

            if (x[0] == 0) flag = false;

            while(flag) {
                for (int i = len - 1; i > 0; i--) {
                    if (x[i] > 0) {
                        mem = i;
                        // if (debug) Console.WriteLine("i " + i);
                        for (int j = 0; j < i; j++) {
                            // if (debug) Console.WriteLine("Q " + j + " " + x[i - j]);
                            if (x[i - j] > j) {
                                x[i - j] -= j + 1;
                            } else {
                                return "";
                            }
                        }
                        break;
                    } else {
                        if (i == 1) {
                            mem = -1;
                            flag = false;
                        }
                    }
                }
                // 文字を作る
                if (mem >= 1) {
                    for (int k = 0; k <= mem; k++) {
                        ans += current;
                    }
                    // 文字を変える
                    if (current == "a") {
                        current = "b";
                    } else {
                        current = "a";
                    }
                    // if (debug) Console.WriteLine("ans = " + ans);
                }
            }

            if (ans.Length > x[0]) {
                return "";
            }

            int tuika = x[0] - ans.Length;

            for (int i = 0; i < tuika; i++) {
                ans += current;
                // 文字を変える
                if (current == "a") {
                    current = "b";
                } else {
                    current = "a";
                }
            }
            return ans;
        }

        static void Main(string[] args)
        {
            BearPasswordAny obj = new BearPasswordAny();
            int[] x = {5,0,0,0,0};
            // int[] x = {4,2,1,0};
            // int[] x = {3,1,1};
            // int[] x = {4,3,2,1};
            // int[] x = {0};
            // int[] x = {4,0,3,2};
            // int[] x = {6,3,1,0,0,0};
            // int[] x = {10,5,2,1,0,0,0,0,0,0};
            // int[] x = {5,4,2,1,0};
            Console.WriteLine(obj.findPassword(x));
        }
    }
}
