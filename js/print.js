function myprint(bookinfo){
  var printContents = document.getElementById('bookinfo').innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}
