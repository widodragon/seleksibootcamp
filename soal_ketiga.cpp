#include <iostream>

using namespace std;

int main()
{
    int rows;

    cout << "Enter number of column: ";
    cin >> rows;

    for(int i = 1; i <= rows; ++i)
    {
        for(int j = 1; j <= i; ++j)
        {
            if(j!=i){
                cout << " ";
            }else{
                cout << "* ";
            }
        }
        cout << "\n";
    }
    return 0;
}
