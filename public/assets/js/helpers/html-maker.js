/**
 *
 *
 *
 *
 */
function makeHTML(tag_name, attrs, content, self_closed) {
  tag = "<" + tag_name;
  $.each(attrs, function(attr_name, attr_val) {
    tag += " " + attr_name + "='" + attr_val + "'";
  });
  if(self_closed) tag += "/>";
  else tag += ">" + content + "</" + tag_name + ">";
  return tag;
}

/**
 *
 *
 *
 *
 */
function makeLable(content, color, href = "#") {
  content = content == " " ? "&nbsp;" : content;
  return makeHTML("div", {
      "class": "label",
    }, makeHTML("span", {
      "style": "background-color:" + color,
    }, ' ') + makeHTML("a", {
      "href": href,
    }, content));
}

/**
 *
 *
 *
 *
 */
let _fraction = window._format_number_fraction;
let _ten = window._format_number_ten;
let _thousand = window._format_number_thousand;
function format_number(number) {
  if(isNaN(number))
    return number;
  if(_fraction > 0 && _fraction < 100)
    number_str = number.toFixed(_fraction);
  else number_str = number.toFixed(0);
  number_arr = number_str.split('.');
  if(number_arr.length == 2) {
    number_decimal = number_arr[0]
    number_fraction = number_arr[1];
  } else {
    number_decimal = number_arr[0]
    number_fraction = "";
  }
  number_decimal_final = "";
  for(let i = number_decimal.length - 1, j = 0; i >= 0; i--, j++) {
    if(j % 3 == 0 && j !== 0) number_decimal_final = _thousand + number_decimal_final;
    number_decimal_final = number_decimal[i] + number_decimal_final;
  }
  if(number_fraction.length)
    return number_decimal_final + _ten + number_fraction;
  return number_decimal_final;
}
