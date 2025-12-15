#include <iostream> 
using namespace std; 

float bagi(int a, int b){ 
    float hasil = (float)a / (float)b; 
    return hasil; 
} 

int main(){ 

    printf("Hasil 625/2: %.2f\n", bagi(625, 2)); 
    return 0;
}