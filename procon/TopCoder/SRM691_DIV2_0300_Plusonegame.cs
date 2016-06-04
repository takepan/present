using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

    class Plusonegame
    {
        public string getorder(string s) {
            int len = s.Length;
            string answer = "";

            Dictionary<string, int> data = new Dictionary<string, int>();
            for (int i = 0; i < len; i++)
            {
                string temp = s.Substring(i, 1);
                if (!data.ContainsKey(temp)) {
                    data.Add(temp, 1);
                } else {
                    data[temp]++;
                }
            }
            int count_plus = 0;
            if (data.ContainsKey("+")) {
                count_plus =  data["+"];
            }
            int num_prev = 0;
            for (int i = 0; i < 10; i++) {
                if (data.ContainsKey(i.ToString())) {
                    int diff = i - num_prev;
                    for (int j = 0; j < diff; j++) {
                        if (count_plus > 0) {
                            answer += "+";
                            count_plus--;
                        }
                    }
                    for (int k = 0; k < data[i.ToString()]; k++) {
                        answer += i.ToString();
                    }
                    num_prev = i;
                }
            }
            for (int l = 0; l < count_plus; l++) {
                answer += "+";
            }
            return answer;
        }
    }
