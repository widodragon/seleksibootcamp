#include <iostream>

using namespace std;

void jumlahKembalian(int selisih){
int tmp,i;
cout<<"jumlah receh yang harus diberikan:"<<endl;
while(selisih>0){
    int data[7]={500,1000,2000,5000,10000,20000,selisih};
    for(i=1;i<7;i++){
            for(int j=0;j<7-1;j++){
                if(data[j]>data[j+1]){
                    tmp=data[j];
                    data[j]=data[j+1];
                    data[j+1]=tmp;
                }
            }
    }
    //tampilkan isi
    for(i=1;i<7;i++){
        if(data[i]==selisih){
            cout<<data[i-1]<<endl;
            selisih=data[i]-data[i-1];
        }
    }
}
}
int main()
{
    int totalBelanja;
    int jumlahUang;
    int selisih;
    cout << "Masukkan total belanja :" << endl;
    cin>> totalBelanja;
    cout<<endl;
    cout << "Masukkan jumlah uang :" << endl;
    cin>> jumlahUang;
    selisih=jumlahUang-totalBelanja;
    jumlahKembalian(selisih);
    cout<<endl;
    return 0;
}
