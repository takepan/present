package main
import "fmt"
//import "bufio"
//import "os"
//import "strings"
import "sort"

func main(){
    // Your code here!
    //fmt.Scanf("%s", &s);
    //scanner := bufio.NewScanner(os.Stdin)
    // x := strings.Split(s, " ")
//    for scanner.Scan() {
    // ここで一行ずつ処理
        //scanner.Scan()
        //x := scanner.Text()
        //y := strings.Split(x, " ")
        //fmt.Println(y[1])
        var a [3]int
        fmt.Scanf("%d %d %d", &a[0], &a[1], &a[2])
        sort.Ints(a[:])
        
        if a[0] == 5 && a[1] == 5 && a[2] == 7 {
            fmt.Println("YES")
        } else {
            fmt.Println("NO")
        }

        //dataInt := strings.Split(x, " ")
        //cnt := len(dataInt)
        //sort.Ints(dataInt)
        
        // fmt.Println(a)
//    }
}
