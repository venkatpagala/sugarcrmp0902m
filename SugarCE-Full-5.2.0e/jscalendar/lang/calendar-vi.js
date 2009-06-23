// ** I18N

// Calendar EN language
// Author: Mihai Bazon, <mishoo@infoiasi.ro>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("Chủ nhật",
 "Thứ hai",
 "Thứ ba",
 "Thứ tư",
 "Thứ năm",
 "Thứ sáu",
 "Thứ bảy",
 "Chủ nhật");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("CN",
 "T2",
 "T3",
 "T4",
 "T5",
 "T6",
 "T7",
 "CN");

// full month names
Calendar._MN = new Array
("Tháng một",
 "Tháng hai",
 "Tháng ba",
 "Tháng tư",
 "Tháng năm",
 "Tháng sáu",
 "Tháng bảy",
 "Tháng tám",
 "Tháng chín",
 "Tháng mười",
 "Tháng mười một",
 "Tháng mười hai");

// short month names
Calendar._SMN = new Array
("Thg1",
 "Thg2",
 "Thg3",
 "Thg4",
 "Thg5",
 "Thg6",
 "Thg7",
 "Thg8",
 "Thg9",
 "Thg10",
 "Thg11",
 "Thg12");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Thông tin về lịch";

Calendar._TT["ABOUT"] =
"DHTML Lựa chọn Ngày/Thời gian\n" +
"(c) dynarch.com 2002-2003\n" + // don't translate this this ;-)
"Để cập nhật phiên bản mới nhất hãy truy cập: http://dynarch.com/mishoo/calendar.epl\n" +
"Phân phối theo GNU LGPL.  Vào trang http://gnu.org/licenses/lgpl.html để biết thêm chi tiết." +
"\n\n" +
"Lựa chọn ngày:\n" +
"- Sử dụng các nút \xab, \xbb để chọn năm\n" +
"- Sử dụng các nút " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " để chọn tháng\n" +
"- Giữ chuột trên bất kỳ nút nào ở trên để lựa chọn nhanh hơn.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Lựa chọn thời gian:\n" +
"- Nhấn chuột vào bất kỳ khoảng thời gian nào để tăng lên\n" +
"- hoặc Shift+nhấn chuột để giảm xuống\n" +
"- hoặc nhấn và kéo để lựa chọn nhanh hơn.";

Calendar._TT["PREV_YEAR"] = "Năm trước (giữ chuột để hiện menu)";
Calendar._TT["PREV_MONTH"] = "Tháng trước (giữ chuột để hiện menu)";
Calendar._TT["GO_TODAY"] = "Tới ngày hôm nay";
Calendar._TT["NEXT_MONTH"] = "Tháng tới (giữ chuột để hiện menu)";
Calendar._TT["NEXT_YEAR"] = "Năm tới (giữ chuột để hiện menu)";
Calendar._TT["SEL_DATE"] = "Lựa chọn ngày và thời gian";
Calendar._TT["DRAG_TO_MOVE"] = "Kéo để di chuyển";
Calendar._TT["PART_TODAY"] = " (hôm nay)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Hiển thị %s đầu tiên";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Đóng lại";
Calendar._TT["TODAY"] = "Hôm nay";
//Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";
Calendar._TT["TIME_PART"] = "Kéo chuột hoặc sử dụng các mũi tên để thay đổi";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";

Calendar._TT["WK"] = "tuần";
Calendar._TT["TIME"] = "Thời gian:";
