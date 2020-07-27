var or_autocomple_url = base_url + 'autocomplete/transaction_number';
$("#or_number").tokenInput(or_autocomple_url, {
    theme: "facebook",
    height:10,
    tokenLimit: 1,
    preventDuplicates: true
});