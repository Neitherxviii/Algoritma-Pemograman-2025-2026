#include <iostream> 
using namespace std; 

void say_hello(string name){ 
    cout << "Halo " << name << "!\n"; 
} 
void say_istigfar(string name){ 
    cout << "Astagfirullah " << name << "!\n"; 
}
void say_question(string name){ 
    cout << "Ngapain kamu " << name << "!\n"; 
} 

int main(){ 
    say_hello("Intan"); 
    say_istigfar("Fadillah"); 
    say_question("Fikri"); 
    return 0;
}