<SCRIPT LANGUAGE="JavaScript">

<!--
var l=0;
var r=0;
  var tc="";
  var al=" abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
  +"123456789";
  var ns="0123456789";
  function iA(){
   this.length=iA.arguments.length;
   for (var i=0;i<this.length;i++){
    this[i]=iA.arguments[i];
   }
  }
  /* 5829 byte database of distances uses position into the
     string "al" to substitute for the numerics, saving a bit
     over 10k download to visitors. */
  var a=new iA(61);
  a[0]="Albany, New York*  tdjaddcdu jgybagc hhfdggqihbdhhbfdphrc"
  +"khfevbniu aaqghamejgm zcmfBehflcn iclejcndafeao malcbfxidebdC"
  +"bqiAfjdvesgBeChxid ni";
  a[1]="Albuquerque, New Mexico*  n xfriiileidvbqgq p pcedmaoipbn"
  +"ffdddigofbglidcu helgjepdgheihhhalijasgmhlblcl t riedhiqdsedf"
  +"pcw mghbjbjdf gchakanereei";
  a[2]="Atlanta, Georgia*  mcfer aevbkaiabie bdnhgagcbaeihbncifgc"
  +"ndmipfifgiecd cahbsheeuidbchffh kbbedhheefhcjadcgercfhkgzfobx"
  +"aegscj uexhzcfbie";
  a[3]="Augusta, Maine*  fgxgoaCfbggclbjdkavblehglajatbvdogjfzcri"
  +"yacgublbqengqbDcqgG lepcrcmbpdnbraeahiscqapbeiCbhfagGhueEdnfz"
  +"dviFgGhFfgbrh";
  a[4]="Baltimore, Maryland*  sbggxadccgegcfdbpggbcfebdcmfpdjdeas"
  +"hmes cbn egjagejgx jdzefdiajigikag kdb bcmakehia wabeedB pczb"
  +"hctgpczhBbAa dlh";
  a[5]="Billings, Montana*  qhfav qbuhqbt dflcpatfpanbeeihoblffaf"
  +"gu oinaqbv jdjenbldocnfybkfhcp rctdthkeiavcshl pfvgi cbifmafd"
  +"obmakihcuaje";
  a[6]="Birmingham, Alabama*  tglci ddefcinbffgccfegfdmchcgflgm p"
  +"cjhg dhbedfgcrcdctecfbfgegdjgaiceihgagbhheehgphgimdyinavheaqi"
  +"hfsiwgydgdhc";
  a[7]="Boise, Idaho*  zivaxiudwegcqatcwisgoihdmfshl lafczarbretd"
  +"xgnbfgqghescrbBgqdnhshuexiybndldzdxcihucAidcifdcpgcdpgihfeebw"
  +"gmf";
  a[8]="Boston, Massachusetts*  dgidgehesbj ffifh qet mdh whpevga"
  +"arcicnfkfndAendDbifmdobjimijioabaehpingm cbzgegaaEdsaBglawhtb"
  +"BhEcDbdepc";
  a[9]="Buffalo, New York*  icdegao edaih ccmfoehecfsgkiqidbnieak"
  +"bjijavhjfyheeibn fciegblfcgf lbjbl cfvbbbedzgncxegesdpcyczgyh"
  +"dal ";
  a[10]="Charleston, South Carolina*  dhbaqaiagcaafejiqbl hdq oas"
  +"fhcjegbfgbdkavhhcxifag eijbmcedgcggddkdlgchffubfejeCeraAbhfui"
  +"lhxbBbCcecld";
  a[11]="Charleston, West Virginia*  bgnadgbecfagjemggid phkdpbfh"
  +"khcbh ffgfucgcxabffcjaefhgdbiaeedajbidh dhshbchhyemgwheardmcw"
  +"dz xgcdif";
  a[12]="Charlotte, North Carolina*  pbgdeb iddjfohjffcpemhrbgdjc"
  +"eefcciigv ghxadffcgdhckedbgbfbcak kdeceatce ifAhpezbgcthldxaA"
  +"bAdchji";
  a[13]="Cheyenne, Wyoming*  ihmcpfm hha fdldgighcerekajhlgqefhhe"
  +"jgkbl kduej hhlfmhqer fie rgqfidnctfkhcbigidddjfkikilepdfb";
  a[14]="Chicago, Illinois*  ceh cfibjbcdbhnffelgiajiaigejaedqhff"
  +"tec edn  idadgibhahghcdhkegiqddhjiubiasebinblatiugtegagc";
  a[15]="Cleveland, Ohio*  faadkimfffagqdj paefmacbidiahbtihgwhce"
  +"gcleddgfecjfdgeajchcjedctcacgcxcldvfehqfnewixhwicfja";
  a[16]="Columbia, South Carolina*  ecjcpbkagbpcncrdhajcfaf c jbu"
  +"igfxbe fbfdhhladdfigbcijfkhddfatceijdBdpizaghublcwhAgAidhkg";
  a[17]="Columbus, Ohio*  jeldffaip ieniffkgahh hcfhtbgcvdbaeikgd"
  +"gghchibefefibgiifdhs aihgxdldvadbphmavfxcwedchg";
  a[18]="Dallas/Ft Worth, Texas*  ghg kffbjiihpibehidajdealccbn h"
  +"cdemdjbieffebofmebaffk ndj larhtdjipgfflfbgmeqeucmacg";
  a[19]="Denver, Colorado*  fglhfihhbet jcjfl qdfagfidjckbjduajdi"
  +"bkhlhqiqgfcedrhqdhanctglfdbjchfeciek lfmdpbeb";
  a[20]="Des Moines, Iowa*  eikcdhibleiddhhcldb ncefqaeifboicgbef"
  +"iihkbkeeeacmfjincghn rbfdp cgjgihqgrcr jfci";
  a[21]="Detroit, Michigan*  pgibobgclhbhifjeggtbhhvichgbmicffied"
  +"jgfegcjcgckgfatac i whkiv ecpgnewgx wcebif";
  a[22]="El Paso, Texas*  nefgvigdnbjcohidgbidhbnejgs odnflhk ues"
  +"efhlephtgddqhxfpcjdkgkhhgefgcl qbschd";
  a[23]="Fargo, North Dakota*  kaofm hcmapifbodjdraidkct egbdkamh"
  +"nenghgdcrancpikcqcnieaohhekemcrgrbnbmcgc";
  a[24]="Grand Junction, Colorado*  uelbmcnasfhfeakeghmglgw likfn"
  +"bngtdtbhbgitgsiehpiwdjeffgekabijiheihkcrhgc";
  a[25]="Hartford, Connecticut*  qchdmejemdzfmdC hgl nbj mbj ncab"
  +"dipdmgk baygdgb D rbB jhvgsaC DhCecfoc";
  a[26]="Houston, Texas*  j dbhigdngdcodidegkikhkhghcepamedfhfiho"
  +"akfmgsfvdmbrhghndb nisawgmgfb";
  a[27]="Indianapolis, Indiana*  fghde rdfatfaadgkibgeibhh gcgagd"
  +"faigffqccfjevdkatfbdogkithviveehfi";
  a[28]="Jackson, Mississippi*  fafipcbfrbeibaiahcjfdabalbieefhgg"
  +" kanfidoixemgthe pffgqfueydiggf";
  a[29]="Jacksonville, Florida*  kdvdhbwegcficekanfefefiefbkembad"
  +"het hcmaCfrczihhwajhwfAeCggblh";
  a[30]="Kansas City, Kansas/Missouri*  mgdboheadhnhefddehhdlckfc"
  +"eailekgldhgofrbfipdbfkaghoirfrfjdb ";
  a[31]="Las Vegas, Nevada*  nfbgrgp ygr pfraqcygxhkam wexhbivaBf"
  +"j kadepbdblicdegkhxbkh";
  a[32]="Little Rock, Arkansas*  pieaadkfgghccedblejbcdehifkdmci "
  +"uikdsad ndehpgsivejadd";
  a[33]="Los Angeles, California*  uhraAbtgrftarfAizimdogxcA cixc"
  +"Edifmfdgrdfimiaccikczemi";
  a[34]="Louisville, Kentucky*  chjichgaagg ggfegeg hfgaqecik wal"
  +"audbfpbk tiwewef g ";
  a[35]="Memphis, Tennessee*  j fbiabadak hhdhfdghjanggfnfwaketcb"
  +"hoegcraubwbheeh";
  a[36]="Miami, Florida*  nfqgiahfmcigo pdbclcwekhpfFfuhD lcygmiz"
  +"hDiG jfp ";
  a[37]="Milwaukee, Wisconsin*  cdeejchiiehhe lbhgqgefkftbhdsfchn"
  +"cliucugshhage";
  a[38]="Minneapolis, Minnesota*  hcmelblcgichogl phhingqbehrcfck"
  +"ilet shpejifc";
  a[39]="Nashville, Tennessee*  eci fgfhgffigipgegl wglevbcbq ict"
  +" wcxdffgd";
  a[40]="New Orleans, Louisiana*  mdjdfijcfelco kdpdydo vcg qheer"
  +"dvhyik he";
  a[41]="New York City, New York*  cgnhlejiaaxechcbCaqbAaihuirbB "
  +"CcBdbdnb";
  a[42]="Norfolk, Virginia*  mgmbggbgwedbgcCgqfAii vboezhD Biaimg";
  a[43]="Oklahoma City, Oklahoma*  dflcmiihkaqdrgheofe k dhmcpfsi"
  +"mcaf";
  a[44]="Omaha, Nebraska*  nal meicocpiecngddididpcpipikdc ";
  a[45]="Orlando, Florida*  iithihn DgsgBdj wdkgxaBgDihemi";
  a[46]="Philadelphia, Pennsylvania*  wgcadbBfpezei ueqdAgC Bbacmf";
  a[47]="Phoenix, Arizona*  tiAelglcgcnhfej cegfngw jd";
  a[48]="Pittsburgh, Pennsylvania*  fiyemfwgfasbnhxdzaybbeje";
  a[49]="Portland, Maine*  FbshCglhyaucE FbDiefqa";
  a[50]="Portland, Oregon*  lfehtfgfu jifdagAhqe";
  a[51]="Rapid City, South Dakota*  lciegdleninekcoigc";
  a[52]="Reno, Nevada*  riecqcf bcgcygnh";
  a[53]="St Louis, Missouri*  mfiercubudhfdf";
  a[54]="Salt Lake City, Utah*  mcgfgehetejb";
  a[55]="San Antonio, Texas*  m qduhoifd";
  a[56]="San Diego, California*  ealfz n ";
  a[57]="San Francisco, California*  haBdq ";
  a[58]="Seattle, Washington*  Abrf";
  a[59]="Washington, DC*  lh";
  a[60]="Wichita, Kansas*  ";
  // For string to numerics on Win3.x
  var b=new iA(4);
  b[0]=1;
  b[1]=10;
  b[2]=100;
  b[3]=1000;
  function getMiles(form){
   lf=(document.isn.isn1.options[document.isn.isn1.selectedIndex].value);
   rf=(document.isn.isn2.options[document.isn.isn2.selectedIndex].value);
   l=al.indexOf(lf);
   r=al.indexOf(rf);
   if (r<l){
    l=r;
    r=al.indexOf(lf);
    }
   ls=a[l];
   pos=ls.indexOf("*")
   ls1="From "+ls.substring(0,pos)+" to "
   +a[r].substring(0,a[r].indexOf("*"))+" is about ";
   ls=ls.substring(pos+1,ls.length);
   tc=ls.substring(((r*2)-(l*2)),ls.length);
   if (document.isn.rb[1].checked){
    dispKm();
    }
   else{
    dispMi();
    }
  }
  function dispMi(){
   ch=tc.charAt(0);
   ls1+=al.indexOf(ch);
   ch=tc.charAt(1);
   if (ch!=" "){
    ls1+=(al.indexOf(ch)*10)+" miles";
    } //1.613
    else ls1+="00"+" miles";
   document.isn.disp.value=ls1;
  }
  function dispKm(){
   ch=tc.charAt(0);
   km="";
   km+=al.indexOf(ch);
   ch=tc.charAt(1);
   if (ch!=" "){
    km+=(al.indexOf(ch)*10);
    } //1.613
    else{
     km+="00";
    }
    num=0;
    kml=km.length;
    for (var i=kml-1;i>-1;i--){
     cr=km.substring(i,i+1);
     pos=ns.indexOf(cr);
     num+=pos*b[kml-i-1];
    }
    km="";
    km+=num*1.613;
    pos=km.indexOf(".");
    if (pos>-1){
     km=km.substring(0,pos);
    }
    ls1+=km+" kilometers";
    document.isn.disp.value=ls1;
  }
  // End Hiding -->
  </SCRIPT>




      <p class="productheadersm"> Driving Distance Calculator</p>
    </td>
    <td class="bodytext" nowrap>
      <div align="right"></div>
    </td>
  </tr>
  <tr>
    <td class="bodytext" colspan="4">
      <hr size="1" width="100%">
    </td>
  </tr>
  <tr>
    <td class="bodytext" colspan="4"><FORM NAME="isn">
        <TABLE BORDER=0 WIDTH=486 align="center">
          <TR><TD COLSPAN=3 ALIGN=CENTER>
<HR noshade><FONT COLOR="blue">
<B>Driving Distances between Selected USA Cities</B></FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="blue">
<B>Starting City</FONT></b></FONT><BR><SELECT NAME="isn1" SIZE=12>
<SCRIPT LANGUAGE="JavaScript">
<!--
ls="";
for (var i=0;i<61;i++){
ls+='<OPTION VALUE="'+al.substring(i,i+1)+'" onClick=""';
if (i==0){ls+=' SELECTED';}
ls+='>'+a[i].substring(0,a[i].indexOf("*"));
}
document.write(ls);
// End hiding -->
</SCRIPT>
</SELECT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT COLOR="blue" SIZE=1>
<B>Instructions:</B></FONT>
<BR>Select starting city at left, destination at right.
Or, if you are feeling particularly contrary today,
vice versa. Then click below.
<P><INPUT TYPE="button" NAME="but" VALUE=" Get Distance " onClick="getMiles(this.form)">
<BR><INPUT TYPE="radio" NAME="rb" VALUE="a" checked onClick="">Miles
<INPUT TYPE="radio" NAME="rb" VALUE="b" onClick="">Kilometers
<TD ALIGN=CENTER><FONT COLOR="blue">
<B>Destination City</B></FONT>
<BR><SELECT NAME="isn2" SIZE=12>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
ls="";
for (var i=0;i<61;i++){
ls+='<OPTION VALUE="'+al.substring(i,i+1)+'" onClick=""';
if (i==1){ls+=' SELECTED';}
ls+='>'+a[i].substring(0,a[i].indexOf("*"));
}
document.write(ls);
// End hiding -->
</SCRIPT>
</SELECT></TD></TR>
<TR><TD COLSPAN=3 ALIGN=CENTER>
<TABLE BORDER=2>
<TR><TD><INPUT TYPE="text" NAME="disp" VALUE="" SIZE=80>
</TD></TR></TABLE></TD></TR>
<TR><TD COLSPAN=3><HR noshade></TD></TR>
</TABLE>
</FORM>