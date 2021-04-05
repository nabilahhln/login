#include <iostream>

using namespace std;

int main(){
 
	int a,b,n,i,sn;

 	cout<<"|=============================================|"<<endl;
 	cout<<"|                                             |"<<endl;
 	cout<<"|Program Menampilkan Bilangan Deret Aritmatika|"<<endl;
 	cout<<"|                     dan                     |"<<endl;
 	cout<<"|Menghitung Jumlah Nilai ke n Deret Aritmatika|"<<endl;
 	cout<<"|                                             |"<<endl;
 	cout<<"|=============================================|"<<endl;
 	cout<<endl;

 	cout<<"Masukan Suku Awal :";
 	cin>>a;
 	cout<<endl;

	cout<<"Masukan Beda :";
	cin>>b;
	cout<<endl;

	cout<<"Masukan Banyak suku :";
	cin>>n;
	cout<<endl;

 	for(i=0;i<n;i++)

	cout<<a+(i*b)<<endl;

	sn = (n/2)*(2*a+((n-1)*b));

    cout<<"\njumlah deret hingga suku "<<n<<" adalah "<<sn;
    
    return 0;

}


