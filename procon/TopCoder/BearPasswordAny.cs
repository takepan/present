using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

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

            if (x[0] == 0) return "";
            if (x[0] == 1) {
                if (len == 1) {
                    return "a";
                }
                if (len == 2 && x[1] == 0) {
                    return "";
                }
            }
            if (x[0] != len) {
                return "";
            }

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
    }
