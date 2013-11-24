function isEmpty(str) {
   // Check whether string is empty.
   for (var intLoop = 0; intLoop < str.length; intLoop++)
      if (" " != str.charAt(intLoop))
         return false;
   return true;
}

function checkRequired() {
   f = document.getElementById("frm");
   var strError = "";
   for (var intLoop = 0; intLoop < f.elements.length; intLoop++) {
      if (null!=f.elements[intLoop].getAttribute("required"))
         if (isEmpty(f.elements[intLoop].value))
            strError += "  " + f.elements[intLoop].getAttribute("displayName") + "\n";
   }
   if ("" != strError) {
      alert("Required data is missing:\n" + strError);
      //return false;
   } else {
     //return true;
     frm.submit();
   }
}
