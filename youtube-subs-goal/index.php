<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<style>
html, body {
  width: 100vw;
  height: 100vh;
  /* background: #eee; */
  margin: 0;
  display: flex;
  align-content: center;
  justify-content: center;
  overflow: hidden;
}

blockquote {
  font: italic 900 60px/1 Montserrat, sans-serif;
  color: #eee;
  margin: auto;
  text-shadow: 0 0 #1ce, -1px 0.5px #11ccee, -2px 1px #11cbee, -3px 1.5px #11cbee, -4px 2px #11cbee, -5px 2.5px #11caee, -6px 3px #11caee, -7px 3.5px #11c9ee, -8px 4px #11c9ee, -9px 4.5px #11c9ee, -10px 5px #11c8ee, -11px 5.5px #11c8ee, -12px 6px #11c8ee, -13px 6.5px #11c7ee, -14px 7px #11c7ee, -15px 7.5px #11c6ee, -16px 8px #11c6ee, -17px 8.5px #11c6ee, -18px 9px #11c5ee, -19px 9.5px #11c5ee, -20px 10px #11c5ee, -21px 10.5px #11c4ee, -22px 11px #11c4ee, -23px 11.5px #11c4ee, -24px 12px #11c3ee, -25px 12.5px #11c3ee, -26px 13px #11c2ee, -27px 13.5px #11c2ee, -28px 14px #11c2ee, -29px 14.5px #11c1ee, -30px 15px #11c1ee, -31px 15.5px #11c1ee, -32px 16px #11c0ee, -33px 16.5px #11c0ee, -34px 17px #11bfee, -35px 17.5px #11bfee, -36px 18px #11bfee, -37px 18.5px #11beee, -38px 19px #11beee, -39px 19.5px #11beee, -40px 20px #11bdee, -41px 20.5px #11bdee, -42px 21px #11bdee, -43px 21.5px #11bcee, -44px 22px #11bcee, -45px 22.5px #11bbee, -46px 23px #11bbee, -47px 23.5px #11bbee, -48px 24px #11baee, -49px 24.5px #11baee, -50px 25px #11baee, -51px 25.5px #11b9ee, -52px 26px #11b9ee, -53px 26.5px #11b8ee, -54px 27px #11b8ee, -55px 27.5px #11b8ee, -56px 28px #11b7ee, -57px 28.5px #11b7ee, -58px 29px #11b7ee, -59px 29.5px #11b6ee, -60px 30px #11b6ee, -61px 30.5px #11b6ee, -62px 31px #11b5ee, -63px 31.5px #11b5ee, -64px 32px #11b4ee, -65px 32.5px #11b4ee, -66px 33px #11b4ee, -67px 33.5px #11b3ee, -68px 34px #11b3ee, -69px 34.5px #11b3ee, -70px 35px #11b2ee, -71px 35.5px #11b2ee, -72px 36px #11b1ee, -73px 36.5px #11b1ee, -74px 37px #11b1ee, -75px 37.5px #11b0ee, -76px 38px #11b0ee, -77px 38.5px #11b0ee, -78px 39px #11afee, -79px 39.5px #11afee, -80px 40px #11afee, -81px 40.5px #11aeee, -82px 41px #11aeee, -83px 41.5px #11adee, -84px 42px #11adee, -85px 42.5px #11adee, -86px 43px #11acee, -87px 43.5px #11acee, -88px 44px #11acee, -89px 44.5px #11abee, -90px 45px #11abee, -91px 45.5px #11aaee, -92px 46px #11aaee, -93px 46.5px #11aaee, -94px 47px #11a9ee, -95px 47.5px #11a9ee, -96px 48px #11a9ee, -97px 48.5px #11a8ee, -98px 49px #11a8ee, -99px 49.5px #11a8ee, -100px 50px #11a7ee, -101px 50.5px #11a7ee, -102px 51px #11a6ee, -103px 51.5px #11a6ee, -104px 52px #11a6ee, -105px 52.5px #11a5ee, -106px 53px #11a5ee, -107px 53.5px #11a5ee, -108px 54px #11a4ee, -109px 54.5px #11a4ee, -110px 55px #11a3ee, -111px 55.5px #11a3ee, -112px 56px #11a3ee, -113px 56.5px #11a2ee, -114px 57px #11a2ee, -115px 57.5px #11a2ee, -116px 58px #11a1ee, -117px 58.5px #11a1ee, -118px 59px #11a1ee, -119px 59.5px #11a0ee, -120px 60px #11a0ee, -121px 60.5px #119fee, -122px 61px #119fee, -123px 61.5px #119fee, -124px 62px #119eee, -125px 62.5px #119eee, -126px 63px #119eee, -127px 63.5px #119dee, -128px 64px #119dee, -129px 64.5px #119cee, -130px 65px #119cee, -131px 65.5px #119cee, -132px 66px #119bee, -133px 66.5px #119bee, -134px 67px #119bee, -135px 67.5px #119aee, -136px 68px #119aee, -137px 68.5px #119aee, -138px 69px #1199ee, -139px 69.5px #1199ee, -140px 70px #1198ee, -141px 70.5px #1198ee, -142px 71px #1198ee, -143px 71.5px #1197ee, -144px 72px #1197ee, -145px 72.5px #1197ee, -146px 73px #1196ee, -147px 73.5px #1196ee, -148px 74px #1195ee, -149px 74.5px #1195ee, -150px 75px #1195ee, -151px 75.5px #1194ee, -152px 76px #1194ee, -153px 76.5px #1194ee, -154px 77px #1193ee, -155px 77.5px #1193ee, -156px 78px #1193ee, -157px 78.5px #1192ee, -158px 79px #1192ee, -159px 79.5px #1191ee, -160px 80px #1191ee, -161px 80.5px #1191ee, -162px 81px #1190ee, -163px 81.5px #1190ee, -164px 82px #1190ee, -165px 82.5px #118fee, -166px 83px #118fee, -167px 83.5px #118eee, -168px 84px #118eee, -169px 84.5px #118eee, -170px 85px #118dee, -171px 85.5px #118dee, -172px 86px #118dee, -173px 86.5px #118cee, -174px 87px #118cee, -175px 87.5px #118cee, -176px 88px #118bee, -177px 88.5px #118bee, -178px 89px #118aee, -179px 89.5px #118aee, -180px 90px #118aee, -181px 90.5px #1189ee, -182px 91px #1189ee, -183px 91.5px #1189ee, -184px 92px #1188ee, -185px 92.5px #1188ee, -186px 93px #1187ee, -187px 93.5px #1187ee, -188px 94px #1187ee, -189px 94.5px #1186ee, -190px 95px #1186ee, -191px 95.5px #1186ee, -192px 96px #1185ee, -193px 96.5px #1185ee, -194px 97px #1185ee, -195px 97.5px #1184ee, -196px 98px #1184ee, -197px 98.5px #1183ee, -198px 99px #1183ee, -199px 99.5px #1183ee, -200px 100px #1182ee, -201px 100.5px #1182ee, -202px 101px #1182ee, -203px 101.5px #1181ee, -204px 102px #1181ee, -205px 102.5px #1180ee, -206px 103px #1180ee, -207px 103.5px #1180ee, -208px 104px #117fee, -209px 104.5px #117fee, -210px 105px #117fee, -211px 105.5px #117eee, -212px 106px #117eee, -213px 106.5px #117eee, -214px 107px #117dee, -215px 107.5px #117dee, -216px 108px #117cee, -217px 108.5px #117cee, -218px 109px #117cee, -219px 109.5px #117bee, -220px 110px #117bee, -221px 110.5px #117bee, -222px 111px #117aee, -223px 111.5px #117aee, -224px 112px #1179ee, -225px 112.5px #1179ee, -226px 113px #1179ee, -227px 113.5px #1178ee, -228px 114px #1178ee, -229px 114.5px #1178ee, -230px 115px #1177ee, -231px 115.5px #1177ee, -232px 116px #1177ee, -233px 116.5px #1176ee, -234px 117px #1176ee, -235px 117.5px #1175ee, -236px 118px #1175ee, -237px 118.5px #1175ee, -238px 119px #1174ee, -239px 119.5px #1174ee, -240px 120px #1174ee, -241px 120.5px #1173ee, -242px 121px #1173ee, -243px 121.5px #1172ee, -244px 122px #1172ee, -245px 122.5px #1172ee, -246px 123px #1171ee, -247px 123.5px #1171ee, -248px 124px #1171ee, -249px 124.5px #1170ee, -250px 125px #1170ee, -251px 125.5px #1170ee, -252px 126px #116fee, -253px 126.5px #116fee, -254px 127px #116eee, -255px 127.5px #116eee, -256px 128px #116eee, -257px 128.5px #116dee, -258px 129px #116dee, -259px 129.5px #116dee, -260px 130px #116cee, -261px 130.5px #116cee, -262px 131px #116bee, -263px 131.5px #116bee, -264px 132px #116bee, -265px 132.5px #116aee, -266px 133px #116aee, -267px 133.5px #116aee, -268px 134px #1169ee, -269px 134.5px #1169ee, -270px 135px #1169ee, -271px 135.5px #1168ee, -272px 136px #1168ee, -273px 136.5px #1167ee, -274px 137px #1167ee, -275px 137.5px #1167ee, -276px 138px #1166ee, -277px 138.5px #1166ee, -278px 139px #1166ee, -279px 139.5px #1165ee, -280px 140px #1165ee, -281px 140.5px #1164ee, -282px 141px #1164ee, -283px 141.5px #1164ee, -284px 142px #1163ee, -285px 142.5px #1163ee, -286px 143px #1163ee, -287px 143.5px #1162ee, -288px 144px #1162ee, -289px 144.5px #1162ee, -290px 145px #1161ee, -291px 145.5px #1161ee, -292px 146px #1160ee, -293px 146.5px #1160ee, -294px 147px #1160ee, -295px 147.5px #115fee, -296px 148px #115fee, -297px 148.5px #115fee, -298px 149px #115eee, -299px 149.5px #115eee, -300px 150px #115eee, -301px 150.5px #115dee, -302px 151px #115dee, -303px 151.5px #115cee, -304px 152px #115cee, -305px 152.5px #115cee, -306px 153px #115bee, -307px 153.5px #115bee, -308px 154px #115bee, -309px 154.5px #115aee, -310px 155px #115aee, -311px 155.5px #1159ee, -312px 156px #1159ee, -313px 156.5px #1159ee, -314px 157px #1158ee, -315px 157.5px #1158ee, -316px 158px #1158ee, -317px 158.5px #1157ee, -318px 159px #1157ee, -319px 159.5px #1157ee, -320px 160px #1156ee, -321px 160.5px #1156ee, -322px 161px #1155ee, -323px 161.5px #1155ee, -324px 162px #1155ee, -325px 162.5px #1154ee, -326px 163px #1154ee, -327px 163.5px #1154ee, -328px 164px #1153ee, -329px 164.5px #1153ee, -330px 165px #1152ee, -331px 165.5px #1152ee, -332px 166px #1152ee, -333px 166.5px #1151ee, -334px 167px #1151ee, -335px 167.5px #1151ee, -336px 168px #1150ee, -337px 168.5px #1150ee, -338px 169px #1150ee, -339px 169.5px #114fee, -340px 170px #114fee, -341px 170.5px #114eee, -342px 171px #114eee, -343px 171.5px #114eee, -344px 172px #114dee, -345px 172.5px #114dee, -346px 173px #114dee, -347px 173.5px #114cee, -348px 174px #114cee, -349px 174.5px #114bee, -350px 175px #114bee, -351px 175.5px #114bee, -352px 176px #114aee, -353px 176.5px #114aee, -354px 177px #114aee, -355px 177.5px #1149ee, -356px 178px #1149ee, -357px 178.5px #1149ee, -358px 179px #1148ee, -359px 179.5px #1148ee, -360px 180px #1147ee, -361px 180.5px #1147ee, -362px 181px #1147ee, -363px 181.5px #1146ee, -364px 182px #1146ee, -365px 182.5px #1146ee, -366px 183px #1145ee, -367px 183.5px #1145ee, -368px 184px #1144ee, -369px 184.5px #1144ee, -370px 185px #1144ee, -371px 185.5px #1143ee, -372px 186px #1143ee, -373px 186.5px #1143ee, -374px 187px #1142ee, -375px 187.5px #1142ee, -376px 188px #1142ee, -377px 188.5px #1141ee, -378px 189px #1141ee, -379px 189.5px #1140ee, -380px 190px #1140ee, -381px 190.5px #1140ee, -382px 191px #113fee, -383px 191.5px #113fee, -384px 192px #113fee, -385px 192.5px #113eee, -386px 193px #113eee, -387px 193.5px #113dee, -388px 194px #113dee, -389px 194.5px #113dee, -390px 195px #113cee, -391px 195.5px #113cee, -392px 196px #113cee, -393px 196.5px #113bee, -394px 197px #113bee, -395px 197.5px #113bee, -396px 198px #113aee, -397px 198.5px #113aee, -398px 199px #1139ee, -399px 199.5px #1139ee, -400px 200px #1139ee, -401px 200.5px #1138ee, -402px 201px #1138ee, -403px 201.5px #1138ee, -404px 202px #1137ee, -405px 202.5px #1137ee, -406px 203px #1136ee, -407px 203.5px #1136ee, -408px 204px #1136ee, -409px 204.5px #1135ee, -410px 205px #1135ee, -411px 205.5px #1135ee, -412px 206px #1134ee, -413px 206.5px #1134ee, -414px 207px #1134ee, -415px 207.5px #1133ee, -416px 208px #1133ee, -417px 208.5px #1132ee, -418px 209px #1132ee, -419px 209.5px #1132ee, -420px 210px #1131ee, -421px 210.5px #1131ee, -422px 211px #1131ee, -423px 211.5px #1130ee, -424px 212px #1130ee, -425px 212.5px #112fee, -426px 213px #112fee, -427px 213.5px #112fee, -428px 214px #112eee, -429px 214.5px #112eee, -430px 215px #112eee, -431px 215.5px #112dee, -432px 216px #112dee, -433px 216.5px #112dee, -434px 217px #112cee, -435px 217.5px #112cee, -436px 218px #112bee, -437px 218.5px #112bee, -438px 219px #112bee, -439px 219.5px #112aee, -440px 220px #112aee, -441px 220.5px #112aee, -442px 221px #1129ee, -443px 221.5px #1129ee, -444px 222px #1128ee, -445px 222.5px #1128ee, -446px 223px #1128ee, -447px 223.5px #1127ee, -448px 224px #1127ee, -449px 224.5px #1127ee, -450px 225px #1126ee, -451px 225.5px #1126ee, -452px 226px #1126ee, -453px 226.5px #1125ee, -454px 227px #1125ee, -455px 227.5px #1124ee, -456px 228px #1124ee, -457px 228.5px #1124ee, -458px 229px #1123ee, -459px 229.5px #1123ee, -460px 230px #1123ee, -461px 230.5px #1122ee, -462px 231px #1122ee, -463px 231.5px #1121ee, -464px 232px #1121ee, -465px 232.5px #1121ee, -466px 233px #1120ee, -467px 233.5px #1120ee, -468px 234px #1120ee, -469px 234.5px #111fee, -470px 235px #111fee, -471px 235.5px #111fee, -472px 236px #111eee, -473px 236.5px #111eee, -474px 237px #111dee, -475px 237.5px #111dee, -476px 238px #111dee, -477px 238.5px #111cee, -478px 239px #111cee, -479px 239.5px #111cee, -480px 240px #111bee, -481px 240.5px #111bee, -482px 241px #111aee, -483px 241.5px #111aee, -484px 242px #111aee, -485px 242.5px #1119ee, -486px 243px #1119ee, -487px 243.5px #1119ee, -488px 244px #1118ee, -489px 244.5px #1118ee, -490px 245px #1118ee, -491px 245.5px #1117ee, -492px 246px #1117ee, -493px 246.5px #1116ee, -494px 247px #1116ee, -495px 247.5px #1116ee, -496px 248px #1115ee, -497px 248.5px #1115ee, -498px 249px #1115ee, -499px 249.5px #1114ee, -500px 250px #1114ee, -501px 250.5px #1113ee, -502px 251px #1113ee, -503px 251.5px #1113ee, -504px 252px #1112ee, -505px 252.5px #1112ee, -506px 253px #1112ee, -507px 253.5px #1111ee, -508px 254px #1111ee, -509px 254.5px #1111ee, -510px 255px #1211ee, -511px 255.5px #1211ee, -512px 256px #1311ee, -513px 256.5px #1311ee, -514px 257px #1311ee, -515px 257.5px #1411ee, -516px 258px #1411ee, -517px 258.5px #1411ee, -518px 259px #1511ee, -519px 259.5px #1511ee, -520px 260px #1611ee, -521px 260.5px #1611ee, -522px 261px #1611ee, -523px 261.5px #1711ee, -524px 262px #1711ee, -525px 262.5px #1711ee, -526px 263px #1811ee, -527px 263.5px #1811ee, -528px 264px #1811ee, -529px 264.5px #1911ee, -530px 265px #1911ee, -531px 265.5px #1a11ee, -532px 266px #1a11ee, -533px 266.5px #1a11ee, -534px 267px #1b11ee, -535px 267.5px #1b11ee, -536px 268px #1b11ee, -537px 268.5px #1c11ee, -538px 269px #1c11ee, -539px 269.5px #1d11ee, -540px 270px #1d11ee, -541px 270.5px #1d11ee, -542px 271px #1e11ee, -543px 271.5px #1e11ee, -544px 272px #1e11ee, -545px 272.5px #1f11ee, -546px 273px #1f11ee, -547px 273.5px #1f11ee, -548px 274px #2011ee, -549px 274.5px #2011ee, -550px 275px #2111ee, -551px 275.5px #2111ee, -552px 276px #2111ee, -553px 276.5px #2211ee, -554px 277px #2211ee, -555px 277.5px #2211ee, -556px 278px #2311ee, -557px 278.5px #2311ee, -558px 279px #2411ee, -559px 279.5px #2411ee, -560px 280px #2411ee, -561px 280.5px #2511ee, -562px 281px #2511ee, -563px 281.5px #2511ee, -564px 282px #2611ee, -565px 282.5px #2611ee, -566px 283px #2611ee, -567px 283.5px #2711ee, -568px 284px #2711ee, -569px 284.5px #2811ee, -570px 285px #2811ee, -571px 285.5px #2811ee, -572px 286px #2911ee, -573px 286.5px #2911ee, -574px 287px #2911ee, -575px 287.5px #2a11ee, -576px 288px #2a11ee, -577px 288.5px #2b11ee, -578px 289px #2b11ee, -579px 289.5px #2b11ee, -580px 290px #2c11ee, -581px 290.5px #2c11ee, -582px 291px #2c11ee, -583px 291.5px #2d11ee, -584px 292px #2d11ee, -585px 292.5px #2d11ee, -586px 293px #2e11ee, -587px 293.5px #2e11ee, -588px 294px #2f11ee, -589px 294.5px #2f11ee, -590px 295px #2f11ee, -591px 295.5px #3011ee, -592px 296px #3011ee, -593px 296.5px #3011ee, -594px 297px #3111ee, -595px 297.5px #3111ee, -596px 298px #3211ee, -597px 298.5px #3211ee, -598px 299px #3211ee, -599px 299.5px #3311ee, -600px 300px #3311ee, -601px 300.5px #3311ee, -602px 301px #3411ee, -603px 301.5px #3411ee, -604px 302px #3411ee, -605px 302.5px #3511ee, -606px 303px #3511ee, -607px 303.5px #3611ee, -608px 304px #3611ee, -609px 304.5px #3611ee, -610px 305px #3711ee, -611px 305.5px #3711ee, -612px 306px #3711ee, -613px 306.5px #3811ee, -614px 307px #3811ee, -615px 307.5px #3911ee, -616px 308px #3911ee, -617px 308.5px #3911ee, -618px 309px #3a11ee, -619px 309.5px #3a11ee, -620px 310px #3a11ee, -621px 310.5px #3b11ee, -622px 311px #3b11ee, -623px 311.5px #3b11ee, -624px 312px #3c11ee, -625px 312.5px #3c11ee, -626px 313px #3d11ee, -627px 313.5px #3d11ee, -628px 314px #3d11ee, -629px 314.5px #3e11ee, -630px 315px #3e11ee, -631px 315.5px #3e11ee, -632px 316px #3f11ee, -633px 316.5px #3f11ee, -634px 317px #4011ee, -635px 317.5px #4011ee, -636px 318px #4011ee, -637px 318.5px #4111ee, -638px 319px #4111ee, -639px 319.5px #4111ee, -640px 320px #4211ee, -641px 320.5px #4211ee, -642px 321px #4211ee, -643px 321.5px #4311ee, -644px 322px #4311ee, -645px 322.5px #4411ee, -646px 323px #4411ee, -647px 323.5px #4411ee, -648px 324px #4511ee, -649px 324.5px #4511ee, -650px 325px #4511ee, -651px 325.5px #4611ee, -652px 326px #4611ee, -653px 326.5px #4711ee, -654px 327px #4711ee, -655px 327.5px #4711ee, -656px 328px #4811ee, -657px 328.5px #4811ee, -658px 329px #4811ee, -659px 329.5px #4911ee, -660px 330px #4911ee, -661px 330.5px #4911ee, -662px 331px #4a11ee, -663px 331.5px #4a11ee, -664px 332px #4b11ee, -665px 332.5px #4b11ee, -666px 333px #4b11ee, -667px 333.5px #4c11ee, -668px 334px #4c11ee, -669px 334.5px #4c11ee, -670px 335px #4d11ee, -671px 335.5px #4d11ee, -672px 336px #4e11ee, -673px 336.5px #4e11ee, -674px 337px #4e11ee, -675px 337.5px #4f11ee, -676px 338px #4f11ee, -677px 338.5px #4f11ee, -678px 339px #5011ee, -679px 339.5px #5011ee, -680px 340px #5011ee, -681px 340.5px #5111ee, -682px 341px #5111ee, -683px 341.5px #5211ee, -684px 342px #5211ee, -685px 342.5px #5211ee, -686px 343px #5311ee, -687px 343.5px #5311ee, -688px 344px #5311ee, -689px 344.5px #5411ee, -690px 345px #5411ee, -691px 345.5px #5511ee, -692px 346px #5511ee, -693px 346.5px #5511ee, -694px 347px #5611ee, -695px 347.5px #5611ee, -696px 348px #5611ee, -697px 348.5px #5711ee, -698px 349px #5711ee, -699px 349.5px #5711ee, -700px 350px #5811ee, -701px 350.5px #5811ee, -702px 351px #5911ee, -703px 351.5px #5911ee, -704px 352px #5911ee, -705px 352.5px #5a11ee, -706px 353px #5a11ee, -707px 353.5px #5a11ee, -708px 354px #5b11ee, -709px 354.5px #5b11ee, -710px 355px #5c11ee, -711px 355.5px #5c11ee, -712px 356px #5c11ee, -713px 356.5px #5d11ee, -714px 357px #5d11ee, -715px 357.5px #5d11ee, -716px 358px #5e11ee, -717px 358.5px #5e11ee, -718px 359px #5e11ee, -719px 359.5px #5f11ee, -720px 360px #5f11ee, -721px 360.5px #6011ee, -722px 361px #6011ee, -723px 361.5px #6011ee, -724px 362px #6111ee, -725px 362.5px #6111ee, -726px 363px #6111ee, -727px 363.5px #6211ee, -728px 364px #6211ee, -729px 364.5px #6311ee, -730px 365px #6311ee, -731px 365.5px #6311ee, -732px 366px #6411ee, -733px 366.5px #6411ee, -734px 367px #6411ee, -735px 367.5px #6511ee, -736px 368px #6511ee, -737px 368.5px #6511ee, -738px 369px #6611ee, -739px 369.5px #6611ee, -740px 370px #6711ee, -741px 370.5px #6711ee, -742px 371px #6711ee, -743px 371.5px #6811ee, -744px 372px #6811ee, -745px 372.5px #6811ee, -746px 373px #6911ee, -747px 373.5px #6911ee, -748px 374px #6a11ee, -749px 374.5px #6a11ee, -750px 375px #6a11ee, -751px 375.5px #6b11ee, -752px 376px #6b11ee, -753px 376.5px #6b11ee, -754px 377px #6c11ee, -755px 377.5px #6c11ee, -756px 378px #6c11ee, -757px 378.5px #6d11ee, -758px 379px #6d11ee, -759px 379.5px #6e11ee, -760px 380px #6e11ee, -761px 380.5px #6e11ee, -762px 381px #6f11ee, -763px 381.5px #6f11ee, -764px 382px #6f11ee, -765px 382.5px #7011ee, -766px 383px #7011ee, -767px 383.5px #7111ee, -768px 384px #7111ee, -769px 384.5px #7111ee, -770px 385px #7211ee, -771px 385.5px #7211ee, -772px 386px #7211ee, -773px 386.5px #7311ee, -774px 387px #7311ee, -775px 387.5px #7311ee, -776px 388px #7411ee, -777px 388.5px #7411ee, -778px 389px #7511ee, -779px 389.5px #7511ee, -780px 390px #7511ee, -781px 390.5px #7611ee, -782px 391px #7611ee, -783px 391.5px #7611ee, -784px 392px #7711ee, -785px 392.5px #7711ee, -786px 393px #7811ee, -787px 393.5px #7811ee, -788px 394px #7811ee, -789px 394.5px #7911ee, -790px 395px #7911ee, -791px 395.5px #7911ee, -792px 396px #7a11ee, -793px 396.5px #7a11ee, -794px 397px #7a11ee, -795px 397.5px #7b11ee, -796px 398px #7b11ee, -797px 398.5px #7c11ee, -798px 399px #7c11ee, -799px 399.5px #7c11ee, -800px 400px #7d11ee, -801px 400.5px #7d11ee, -802px 401px #7d11ee, -803px 401.5px #7e11ee, -804px 402px #7e11ee, -805px 402.5px #7f11ee, -806px 403px #7f11ee, -807px 403.5px #7f11ee, -808px 404px #8011ee, -809px 404.5px #8011ee, -810px 405px #8011ee, -811px 405.5px #8111ee, -812px 406px #8111ee, -813px 406.5px #8111ee, -814px 407px #8211ee, -815px 407.5px #8211ee, -816px 408px #8311ee, -817px 408.5px #8311ee, -818px 409px #8311ee, -819px 409.5px #8411ee, -820px 410px #8411ee, -821px 410.5px #8411ee, -822px 411px #8511ee, -823px 411.5px #8511ee, -824px 412px #8611ee, -825px 412.5px #8611ee, -826px 413px #8611ee, -827px 413.5px #8711ee, -828px 414px #8711ee, -829px 414.5px #8711ee, -830px 415px #8811ee, -831px 415.5px #8811ee, -832px 416px #8811ee, -833px 416.5px #8911ee, -834px 417px #8911ee, -835px 417.5px #8a11ee, -836px 418px #8a11ee, -837px 418.5px #8a11ee, -838px 419px #8b11ee, -839px 419.5px #8b11ee, -840px 420px #8b11ee, -841px 420.5px #8c11ee, -842px 421px #8c11ee, -843px 421.5px #8d11ee, -844px 422px #8d11ee, -845px 422.5px #8d11ee, -846px 423px #8e11ee, -847px 423.5px #8e11ee, -848px 424px #8e11ee, -849px 424.5px #8f11ee, -850px 425px #8f11ee, -851px 425.5px #8f11ee, -852px 426px #9011ee, -853px 426.5px #9011ee, -854px 427px #9111ee, -855px 427.5px #9111ee, -856px 428px #9111ee, -857px 428.5px #9211ee, -858px 429px #9211ee, -859px 429.5px #9211ee, -860px 430px #9311ee, -861px 430.5px #9311ee, -862px 431px #9411ee, -863px 431.5px #9411ee, -864px 432px #9411ee, -865px 432.5px #9511ee, -866px 433px #9511ee, -867px 433.5px #9511ee, -868px 434px #9611ee, -869px 434.5px #9611ee, -870px 435px #9611ee, -871px 435.5px #9711ee, -872px 436px #9711ee, -873px 436.5px #9811ee, -874px 437px #9811ee, -875px 437.5px #9811ee, -876px 438px #9911ee, -877px 438.5px #9911ee, -878px 439px #9911ee, -879px 439.5px #9a11ee, -880px 440px #9a11ee, -881px 440.5px #9b11ee, -882px 441px #9b11ee, -883px 441.5px #9b11ee, -884px 442px #9c11ee, -885px 442.5px #9c11ee, -886px 443px #9c11ee, -887px 443.5px #9d11ee, -888px 444px #9d11ee, -889px 444.5px #9d11ee, -890px 445px #9e11ee, -891px 445.5px #9e11ee, -892px 446px #9f11ee, -893px 446.5px #9f11ee, -894px 447px #9f11ee, -895px 447.5px #a011ee, -896px 448px #a011ee, -897px 448.5px #a011ee, -898px 449px #a111ee, -899px 449.5px #a111ee, -900px 450px #a211ee, -901px 450.5px #a211ee, -902px 451px #a211ee, -903px 451.5px #a311ee, -904px 452px #a311ee, -905px 452.5px #a311ee, -906px 453px #a411ee, -907px 453.5px #a411ee, -908px 454px #a411ee, -909px 454.5px #a511ee, -910px 455px #a511ee, -911px 455.5px #a611ee, -912px 456px #a611ee, -913px 456.5px #a611ee, -914px 457px #a711ee, -915px 457.5px #a711ee, -916px 458px #a711ee, -917px 458.5px #a811ee, -918px 459px #a811ee, -919px 459.5px #a811ee, -920px 460px #a911ee, -921px 460.5px #a911ee, -922px 461px #aa11ee, -923px 461.5px #aa11ee, -924px 462px #aa11ee, -925px 462.5px #ab11ee, -926px 463px #ab11ee, -927px 463.5px #ab11ee, -928px 464px #ac11ee, -929px 464.5px #ac11ee, -930px 465px #ad11ee, -931px 465.5px #ad11ee, -932px 466px #ad11ee, -933px 466.5px #ae11ee, -934px 467px #ae11ee, -935px 467.5px #ae11ee, -936px 468px #af11ee, -937px 468.5px #af11ee, -938px 469px #af11ee, -939px 469.5px #b011ee, -940px 470px #b011ee, -941px 470.5px #b111ee, -942px 471px #b111ee, -943px 471.5px #b111ee, -944px 472px #b211ee, -945px 472.5px #b211ee, -946px 473px #b211ee, -947px 473.5px #b311ee, -948px 474px #b311ee, -949px 474.5px #b411ee, -950px 475px #b411ee, -951px 475.5px #b411ee, -952px 476px #b511ee, -953px 476.5px #b511ee, -954px 477px #b511ee, -955px 477.5px #b611ee, -956px 478px #b611ee, -957px 478.5px #b611ee, -958px 479px #b711ee, -959px 479.5px #b711ee, -960px 480px #b811ee, -961px 480.5px #b811ee, -962px 481px #b811ee, -963px 481.5px #b911ee, -964px 482px #b911ee, -965px 482.5px #b911ee, -966px 483px #ba11ee, -967px 483.5px #ba11ee, -968px 484px #bb11ee, -969px 484.5px #bb11ee, -970px 485px #bb11ee, -971px 485.5px #bc11ee, -972px 486px #bc11ee, -973px 486.5px #bc11ee, -974px 487px #bd11ee, -975px 487.5px #bd11ee, -976px 488px #bd11ee, -977px 488.5px #be11ee, -978px 489px #be11ee, -979px 489.5px #bf11ee, -980px 490px #bf11ee, -981px 490.5px #bf11ee, -982px 491px #c011ee, -983px 491.5px #c011ee, -984px 492px #c011ee, -985px 492.5px #c111ee, -986px 493px #c111ee, -987px 493.5px #c211ee, -988px 494px #c211ee, -989px 494.5px #c211ee, -990px 495px #c311ee, -991px 495.5px #c311ee, -992px 496px #c311ee, -993px 496.5px #c411ee, -994px 497px #c411ee, -995px 497.5px #c411ee, -996px 498px #c511ee, -997px 498.5px #c511ee, -998px 499px #c611ee, -999px 499.5px #c611ee, -1000px 500px #c611ee, 0 -1px  #1ce, 1px 0  #1ce, 1px 1px  #1ce;
}
blockquote:before {
  /* content: 'CLICK'; */
  position: fixed;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font: 900 14px/1 Montserrat;
  color: #1ce;
  letter-spacing: 3px;
  -webkit-animation: pulse .5s ease-in alternate infinite;
          animation: pulse .5s ease-in alternate infinite;
  text-shadow: none;
}
blockquote span {
  display: block;
  -webkit-transform: translate3d(-50vw, 30vw, 0);
          transform: translate3d(-50vw, 30vw, 0);
  opacity: 0;
  transition: all 1s cubic-bezier(0.65, 0.02, 0.23, 1);
}
blockquote span:nth-child(1) {
  transition-delay: 0.1s;
  z-index: 1;
}
blockquote span:nth-child(2) {
  transition-delay: 0.2s;
  z-index: 2;
}
blockquote span:nth-child(3) {
  transition-delay: 0.3s;
  z-index: 3;
}
blockquote span:nth-child(4) {
  transition-delay: 0.4s;
  z-index: 4;
}
blockquote span:nth-child(5) {
  transition-delay: 0.5s;
  z-index: 5;
}
blockquote span:nth-child(6) {
  transition-delay: 0.6s;
  z-index: 6;
}
blockquote span:nth-child(7) {
  transition-delay: 0.7s;
  z-index: 7;
}
blockquote.animate:before {
  display: none;
}
blockquote.animate span {
  opacity: 1;
  position: relative;
}
blockquote.animate span:nth-child(1) {
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  transition-delay: 0.6s;
}
blockquote.animate span:nth-child(2) {
  -webkit-transform: translate3d(40px, 0, 0);
          transform: translate3d(40px, 0, 0);
  transition-delay: 0.5s;
}
blockquote.animate span:nth-child(3) {
  -webkit-transform: translate3d(60px, 0, 0);
          transform: translate3d(60px, 0, 0);
  transition-delay: 0.4s;
}
blockquote.animate span:nth-child(4) {
  -webkit-transform: translate3d(80px, 0, 0);
          transform: translate3d(80px, 0, 0);
  transition-delay: 0.3s;
}
blockquote.animate span:nth-child(5) {
  -webkit-transform: translate3d(100px, 0, 0);
          transform: translate3d(100px, 0, 0);
  transition-delay: 0.2s;
}
blockquote.animate span:nth-child(6) {
  -webkit-transform: translate3d(120px, 0, 0);
          transform: translate3d(120px, 0, 0);
  transition-delay: 0.1s;
}
blockquote.animate span:nth-child(7) {
  -webkit-transform: translate3d(140px, 0, 0);
          transform: translate3d(140px, 0, 0);
  transition-delay: 0s;
}

@-webkit-keyframes pulse {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}

@keyframes pulse {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}


#borala {
	position:absolute;
	z-index: 999;
	left: -5px;
	top: 600px;
}
#boratentar {
	position: relative;
	z-index: 998;
}

</style>
<body>
	<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->


<script>
function animate() {
  document.querySelector('blockquote').classList.toggle('animate');
}

document.addEventListener('click', animate);

setTimeout(animate, 1000);
</script>
</body>
</html>



<?php

function getJsonArray($url) {
	$result = file_get_contents($url);
	return $result;
}

$url = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCZV_OxS-FfNsN-ZzqMwxVYg&key=AIzaSyCvVoVuoIIVUuXRf6jOBTvhIxvDpU0f2gU";
$jsonDecoded = json_decode(getJsonArray($url), true);
// var_dump($jsonDecoded);

$subsCount = $jsonDecoded['items'][0]['statistics']['subscriberCount'];

if ($subsCount == 600) {
?>
<div id="borala">
<blockquote>
  <span>Ai pessoal</span>
  <span>conseguimos</span>
  <span>chegar a</span>
  <span>meta de</span>
  <span>600</span>
  <span>inscritos</span>
  <span>no canal</span>
</blockquote>
</div>

<div id="boratentar">
<video width="1920" height="1080" autoplay>
  <source src="Confetti.mp4" type="video/mp4">
  <source src="Confetti.ogv" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
<?php
} else {
	echo "
		<script>
			setTimeout(function(){
				window.location.reload(1);
			}, 30000);
		</script>
	";
}
?>