export const SmartCarIR = `#include <vehicle.h>
#include <IRremote.h>

int IRpin = 4;
unsigned long lastCommandTime;
const unsigned long commandTimeout = 100;
uint32_t last_decode = 0;
uint32_t current_decode = 0;

IRrecv myIRrecv(IRpin);
vehicle myCar;
int Speed = 255;

void setup() {
  Serial.begin(9600);
  myIRrecv.enableIRIn();
  myCar.Init();
}

void loop() {
  if (myIRrecv.decode()) {
    lastCommandTime = millis();
    current_decode = myIRrecv.decodedIRData.decodedRawData;
    if (myIRrecv.decodedIRData.flags) {
      current_decode = last_decode;
    }
    Serial.print(current_decode, HEX);
    Serial.println("");
    switch (current_decode) {
      case 0xB946FF00: myCar.Move(Forward, Speed); break;
      case 0xEA15FF00: myCar.Move(Backward, Speed); break;
      case 0xBB44FF00: myCar.Move(Contrarotate, Speed); break;
      case 0xBC43FF00: myCar.Move(Clockwise, Speed); break;
      case 0xE916FF00: myCar.Move(Move_Left, Speed); break;
      case 0xF20DFF00: myCar.Move(Move_Right, Speed); break;
    }
    last_decode = current_decode;
    myIRrecv.resume();
  }
  if (millis() - lastCommandTime > commandTimeout) {
    myCar.Move(Stop, 0);
  }
}
`;
