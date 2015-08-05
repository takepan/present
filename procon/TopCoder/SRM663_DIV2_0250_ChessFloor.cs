using System;
using System.Collections.Generic;
using System.Collections;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

    class ChessFloor
    {
        public int minimumChanges(string[] floor)
        {
            Dictionary<string, int> d1 = new Dictionary<string, int>();
            Dictionary<string, int> d2 = new Dictionary<string, int>();
            int ans = floor.Length * floor.Length;

            for (int i = 0; i < floor.Length; i++ )
            {
                //Console.WriteLine("Line" + i);
                for (int j = 0; j < floor[i].Length; j++)
                {
                    string s = floor[i].Substring(j, 1);
                    if ((i + j) % 2 == 0)
                    {
                        if (d1.ContainsKey(s))
                        {
                            d1[s]++;
                        } else
                        {
                            d1.Add(s, 1);
                        }
                    } else
                    {
                        if (d2.ContainsKey(s))
                        {
                            d2[s]++;
                        } else
                        {
                            d2.Add(s, 1);
                        }
                    }
                }

            }

            // List<KeyValuePair<string, int>>を作成し、Dictionaryの内容をコピー
            List<KeyValuePair<string, int>> d11 = new List<KeyValuePair<string, int>>(d1);
            List<KeyValuePair<string, int>> d22 = new List<KeyValuePair<string, int>>(d2);


            // List.Sortメソッドを使ってソート
            d11.Sort(CompareKeyValuePair);
            d22.Sort(CompareKeyValuePair);

            string d11k = "", d12k = "", d21k = "", d22k = "";
            int d11v = 0, d12v = 0, d21v = 0, d22v = 0;
            foreach (KeyValuePair<string, int> pair in d11)
            {
                //Console.WriteLine("A: {0} {1}", pair.Key, pair.Value);
                if (d11k == "")
                {
                    d11k = pair.Key;
                    d11v = pair.Value;
                } else if (d12k == "")
                {
                    d12k = pair.Key;
                    d12v = pair.Value;
                }
            }
            foreach (KeyValuePair<string, int> pair in d22)
            {
                //Console.WriteLine("B: {0} {1}", pair.Key, pair.Value);
                if (d21k == "")
                {
                    d21k = pair.Key;
                    d21v = pair.Value;
                } else if (d22k == "")
                {
                    d22k = pair.Key;
                    d22v = pair.Value;
                }
            }
            int minus = 0;
            if (d11k == d21k)
            {
                //Console.WriteLine("same");
                if (d11v + d22v > d12v + d21v)
                {
                    minus = d11v + d22v;
                } else
                {
                    minus = d12v + d21v;
                }
            } else
            {
                //Console.WriteLine("diff");
                minus = d11v + d21v;
            }
            //Console.WriteLine(d11k + " " + d11v);
            //Console.WriteLine(d12k + " " + d12v);
            //Console.WriteLine(d21k + " " + d21v);
            //Console.WriteLine(d22k + " " + d22v);
            //Console.WriteLine(minus);

            return ans - minus;
        }

        static int CompareKeyValuePair(KeyValuePair<string, int> x, KeyValuePair<string, int> y)
        {
            // Keyで比較した結果を返す
            if (x.Value > y.Value)
            {
                return -1;
            } else
            {
                return 0;
            }
        }
    }