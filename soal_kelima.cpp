#include <iostream>

using namespace std;

int count_handshake(int jumlah){
    static int j=1;
    int i;
    static int counter=0;
    while(j!=jumlah-1){
        for(i=j;i<jumlah;i++){
            counter++;
        }
        j++;
    }
    return counter+1;
}

int main()
{
    int banyak;
    cout<<"masukkan jumlah orang?";
    cin>>banyak;
    cout<<endl;
    cout<<"jumlah kemungkinan terjadi jabat tangan hanya sekali adalah :"<<count_handshake(banyak);
    return 0;
}
