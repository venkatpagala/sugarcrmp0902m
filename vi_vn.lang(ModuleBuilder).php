<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 *********************************************************************************/

$mod_strings = array(
'help'=>
array(
	'package'=>array(
			'create'=>'Cung cấp một <b> tên </ b> cho các gói phần mềm. Tên bạn nhập vào phải được alphanumeric và không chứa các khoảng trắng. (Ví dụ: HR_Management)<br/>
<br/>
Bạn có thể cung cấp<b>Tác giả</b> và <b>mô tả</b> thông tin cho gói. <br/>
<br/>
Nhấp<b>lưu giữ</b> để tạo ra một gói.',
			'modify'=>'Các thuộc tính có thể có các hoạt động cho các <b> gói </ b> xuất hiện ở đây.<br>
<br>
Bạn có thể chỉnh sửa<b>Tên</b>, <b>Tác giả</b> và <b>Mô tả</b>của gói,cũng như xem và chỉnh tất cả các môđun chứa trong gói phần mềm.<br>
<br>
Nhấp <b>Modul mới</b> để tạo modul cho gói mới.<br>
<br>
Nếu gói phần mềm chứa ít nhất một trong các modul, bạn có thể <b>Publish</b> v à<b>Deploy</b> gói đó, giống như là<b>xuất ra</b>thực hiện tùy chỉnh trong các gói phần mềm.',
			'name'=>'Đây là <b>tên</b>hiện tại của các gói phần mềm. <br/>
<br/>
Tên bạn nhập vào phải được alphanumeric, bắt đầu bằng một chữ cái và các nội dung không có dấu cách. (Ví dụ: HR_Management)',
			'author'=>'Đây là <b>Tác giả</b>được hiển thị trong quá trình cài đặt như là tên của tổ chức đó tạo ra các gói phần mềm.<br>
<br>
Tác giả có thể là một cá nhân hay một công ty.',
			'description'=>'Đây<b>mô tả</b> gói phần mềm trong quá trình cài đặt.',
			'publishbtn'=>'Nhấp vào <b>Publish</b> để lưu tất cả các dữ liệu và nhập vào để tạo ra một tập tin. zip file đó là cài một phiên bản của gói.<br>
<br>
Sử dụng <b>tải về Modul</b>để tải lên tập tin. zip và cài đặt các gói phần mềm.',
			'deploybtn'=>'Nhấp vào <b>Deploy</b>để lưu tất cả các dữ liệu nhập vào và để cài đặt các gói phần mềm, bao gồm tất cả các mô-đun, trong hiện tại.',
			'duplicatebtn'=>'Nhấp vào<b>Duplicate</b>để sao chép nội dung của gói vào một gói phần mềm mới và để hiển thị các gói phần mềm mới. <br/>
<br/>
Cho gói mới,tên mới sẽ được tạo ra tự động của một số appending vào cuối tên của gói phần mềm được sử dụng để tạo mới .Bạn có thể đổi tên mới bằng cách nhập vào một gói phần mềm mới <b> Tên </ b> và nhấp vào Lưu <b> </ b>.',
			'exportbtn'=>'Nhấp vào <b>Export</b>để tạo một tập tin. zip tập tin chứa các tuỳ chỉnh trong các gói phần mềm.<br>
<br>
Đã tạo ra không phải là một tập tin để cài phiên bản phần mềm.<br>
<br>
Sử dụng <b>Tải Modul</b>để nhập tập tin. zip và để có các gói phần mềm, bao gồm các tuỳ chỉnh, xuất hiện trong Module Builder.',
			'deletebtn'=>'Nhấp vào <b>Delete</b>để xoá gói này và tất cả các tập tin liên quan đến các gói này.',
			'savebtn'=>'Nhấp vào<b>Save</b>để lưu vào tất cả các dữ liệu liên quan tới các gói phần mềm.',
			'existing_module'=>'Nhấp vào <b>Module</b>biểu tượng để chỉnh sửa các tài sản và tuỳ chỉnh các trường, các mối quan hệ và bố trí kết hợp với các mô-đun.',
			'new_module'=>'Nhấp vào <b>New Module</b>để tạo ra một mô-đun mới cho các gói này.',
			'key'=>'5-thư này, alphanumeric<b>Key</b> sẽ được sử dụng tiền tố cho tất cả các thư mục, tên lớp học và cơ sở dữ liệu cho tất cả các bảng biểu của các modul trong gói phần mềm hiện nay. <br>
<br>
Các phím được sử dụng trong một nỗ lực để đạt được bảng tên độc đáo.',
			'readme'=>'Nhấp để thêm <b>Readme</b> văn bản cho các gói này.<br>
<br>
Các Readme sẽ có sẵn tại thời điểm cài đặt.',
	),
	'main'=>array(

	),
	'module'=>array(




		'create'=>'Cung cấp một<b>Name</b> cho modul.<b> Nhãn </ b> mà bạn cung cấp sẽ xuất hiện trong thẻ tab chuyển hướng. <br/>
<br/>
Chọn để hiển thị một chuyển hướng thẻ cho các mô-đun bằng cách kiểm tra <b> Danh mục chính tab </ b> ô trống.<br/>
<br/>
Sau đó, chọn kiểu mô-đun, bạn muốn tạo. <br/>
<br/>
Chọn một kiểu mẫu. Mỗi mẫu có chứa một bộ các lĩnh vực cụ thể, cũng như được xác định trước khi bố trí, sử dụng như là một cơ sở cho các mô-đun của bạn. <br/>
<br/>
Click <b>Save</b> để tạo modul.',

		'modify'=>'Bạn có thể thay đổi các mô-đun tài sản hoặc tùy chỉnh <b> trường </ b>, <b> Quan hệ </ b> và <b> bày </ b> có liên quan đến các mô-đun.',
		'importable'=>'Kiểm tra <b>Importable</b> ô trống sẽ cho phép nhập khẩu cho các mô-đun này.<br>
<br>
Một liên kết tới nhập Wizard sẽ xuất hiện trong các phím tắt trong bảng điều khiển mô-đun.The Wizard tạo điều kiện nhập, nhập của các nguồn dữ liệu từ bên ngoài vào các tùy chỉnh mô-đun.',
		'team_security'=>'Kiểm tra<b>Team Security</b> ô trống sẽ cho phép đội ngũ bảo mật này cho các mô-đun. <br/>
<br/>
Nếu đội ngũ bảo mật được kích hoạt, các đội lựa chọn lĩnh vực này sẽ xuất hiện trong các bản ghi trong các mô-đun ',
		'reportable'=>'Kiểm tra các hộp này sẽ cho phép các mô-đun này để có bảng báo cáo hoạt động của nó.',
		'assignable'=>'Kiểm tra các hộp này sẽ cho phép ghi lại trong một mô-đun này sẽ được giao cho một người sử dụng lựa chọn.',
		'has_tab'=>'Kiểm tra <b>Navigation Tab</b>sẽ cung cấp một thẻ chuyển hướng cho các mô-đun.',
		'acl'=>'Kiểm tra các hộp này sẽ cho phép kiểm soát truy cập vào mô đun này, bao gồm cả cấp bậc lĩnh vực an ninh.',
		'studio'=>'Kiểm tra các hộp này sẽ cho phép các quản trị viên này để tùy chỉnh mô-đun trong vòng Studio.',
		'audit'=>'Kiểm tra các hộp này sẽ cho phép kiểm toán cho các mô đun này. Thay đổi đối với một số lĩnh vực sẽ được ghi lại để các quản trị viên có thể xem xét việc thay đổi lịch sử.',
		'viewfieldsbtn'=>'Nhấp vào <b>View Fields</b>để xem các trường liên kết với các mô-đun và để tạo và chỉnh sửa các tuỳ chỉnh lĩnh vực.',
		'viewrelsbtn'=>'Nhấp vào <b> xem quan hệ </ b> để xem những mối quan hệ liên kết với các phân hệ này và để tạo ra các mối quan hệ mới.',
		'viewlayoutsbtn'=>'Nhấp vào <b>xem & bày </ b> để xem bố trí cho các mô-đun và để tùy chỉnh trong lĩnh vực sắp xếp bố trí.',
		'duplicatebtn'=>'Nhấp vào <b>Duplicate</b>để sao chép thuộc tính của các mô-đun mới vào một mô-đun và để hiển thị các mô-đun mới. <br/>
<br/>
Đối với các modul mới, tên mới sẽ được tạo ra tự động của một số appending vào cuối tên của mô-đun được sử dụng để tạo mới.',
		'deletebtn'=>'Nhấp vào <b> Delete </ b> để xóa mô-đun này.',
		'name'=>'Đây là <b>Tên</b> hiện tại của modul.<br/>
<br/>
Tên phải được alphanumeric, và phải bắt đầu bằng một chữ cái và các nội dung không có dấu cách. (Ví dụ: HR_Management)',
		'label'=>'Đây là <b> Nhãn </ b> sẽ xuất hiện trong các thẻ tab chuyển hướng cho các mô-đun. ',
		'savebtn'=>'Nhấp vào <b>Lưu</ b> để lưu tất cả các dữ liệu nhập liên quan tới các mô-đun.',
		'type_basic'=>'<b> Cơ bản </ b> cung cấp các loại mẫu cơ bản lĩnh vực, chẳng hạn như tên, chỉ để, đội, ngày tạo mô tả và các lĩnh vực.',
		'type_company'=>'<b> Công ty </ b> tổ chức cung cấp các loại mẫu-lĩnh vực cụ thể, chẳng hạn như Công ty, Công nghiệp và Địa chỉ. <br/>
<br/>
Sử dụng mẫu này để tạo ra mô-đun được tương tự với những tiêu chuẩn tài khoản mô-đun.',
		'type_issue'=>'<b> Số </ b> cung cấp các loại mẫu trường hợp-và-lỗi lĩnh vực cụ thể, chẳng hạn như số, tình trạng, và ưu tiên mô tả. <br/>
<br/>
Sử dụng mẫu này để tạo ra mô-đun được tương tự với những tiêu chuẩn trường hợp và mô-đun lỗi Tracker.',
		'type_person'=>'<b> Cá nhân </ b> cung cấp các loại mẫu riêng lĩnh vực cụ thể, chẳng hạn như Salutation, tiêu đề, tên, địa chỉ và số điện thoại. <br/>
<br/>
Sử dụng mẫu này để tạo ra mô-đun được tương tự với những tiêu chuẩn địa chỉ liên lạc và Lead mô-đun.',
		'type_sale'=>'<b> Bán </ b> cung cấp các loại mẫu cơ hội lĩnh vực cụ thể, chẳng hạn như Lead tháng, giai đoạn, số lượng và Probability. <br/>
<br/>
sử dụng mẫu này để tạo ra mô-đun tương tự với những tiêu chuẩn cơ hội mô-đun.',
		'type_file'=>'<b> File </ b> cung cấp các mẫu văn bản lĩnh vực cụ thể, chẳng hạn như tên file, loại hình tài liệu, và ngày xuất bản. <br>
<br>
Sử dụng mẫu này để tạo ra mô-đun tương tự với những tiêu chuẩn văn bản mô-đun.',

	),
	'dropdowns'=>array(
		'default' => 'Tất cả các <b> Dropdowns </ b> cho các ứng dụng được liệt kê ở đây.<br>
<br>
Các dropdowns có thể được sử dụng cho các lĩnh vực dropdown trong bất kỳ mô-đun.<br>
<br>
Để thực hiện thay đổi cho một dropdown hiện tại, bấm vào tên dropdown.<br>
<br>
Nhấp vào <b> Thêm Dropdown </ b> để tạo một dropdown mới.',
		'editdropdown'=>'Danh sách Dropdown có thể được sử dụng cho các tiêu chuẩn hay tùy chỉnh dropdown trong lĩnh vực bất kỳ của mô-đun.<br>
<br>
Cung cấp một <b> Tên </ b> cho các danh sách dropdown.<br>
<br>
Nếu bất cứ ngôn ngữ nào được cài đặt trong gói ứng dụng, bạn có thể chọn <b> ngôn ngữ </ b> để sử dụng cho các bản ghi trong danh sách.<br>
<br>
Trong những khoản <b> Tên </ b>, cung cấp một tên cho các tùy chọn trong danh sách dropdown. Tên gọi này sẽ không xuất hiện trong danh sách dropdown có thể nhìn thấy cho những người sử dụng.<br>
<br>
Trong <b> Hiển thị Nhãn </ b>, cung cấp cho một nhãn sẽ được hiển thị cho người sử dụng.<br>
<br>
Sau khi cung cấp các sản phẩm và hiển thị tên nhãn, nhấp vào <b> Thêm </ b> để thêm các mục vào danh sách dropdown.<br>
<br>
Để sắp xếp lại các bản ghi trong danh sách, kéo và thả các bản ghi vào vị trí mong muốn.<br>
<br>
Để chỉnh sửa hiển thị nhãn hiệu của một mục, hãy nhấp vào biểu tượng <b> Hiệu chỉnh </ b>, và nhập một nhãn mới. Để xóa một mục từ danh sách dropdown, hãy nhấp vào biểu tượng <b> Xoá</b>.<br>
<br>
Để hủy bước thay đổi được thực hiện cho một nhãn hiển thị, hãy nhấp vào Hoàn tác <b> </ b>. Để lại một thay đổi mà bạn đã được hoàn tác, nhấp vào <b>Làm lại </ b>.<br>
<br>
Nhấp vào <b>Lưu </ b> để lưu danh sách các dropdown.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong khi <b> Subpanel </ b> xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong khi Subpanel.<br/>
<br/>
	<b> Hidden </ b> cột chứa các lĩnh vực mà có thể được thêm vào các cột mặc định.',
		'savebtn'	=> 'Nhấp vào Lưu & Triển khai <b> </ b> để lưu các thay đổi bạn đã thực hiện và để làm cho chúng hoạt động trong các mô-đun.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Hidden' 	=> '<b> Hidden </ b> lĩnh vực không xuất hiện trong các subpanel.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong các lĩnh vực subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong <b> ListView </ b> xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong ListView theo mặc định.<br/>
<br/>
<b>Có sẵn </ b> các cột chứa các lĩnh vực mà một người dùng có thể lựa chọn trong tìm kiếm để tạo một ListView. <br/>
<br/>
<b> Hidden </ b> cột chứa các lĩnh vực mà có thể được thêm vào mặc định sẵn có hoặc cột.',
		'savebtn'	=>'Nhấp vào <b> Lưu & Triển khai </ b> để lưu các thay đổi bạn đã thực hiện và để làm cho chúng hoạt động trong các mô-đun.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Hidden' 	=> '<b> Hidden </ b> trường hiện không có sẵn cho người dùng để xem trong ListViews.',
		'Available' => '<b>Available</ b> không phải là lĩnh vực được hiển thị theo mặc định, nhưng có thể được thêm vào ListViews của người dùng.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong lĩnh vực ListViews không được tùy chỉnh của người sử dụng.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong khi <b> Tìm kiếm </ b> hình thức xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực mà sẽ được hiển thị trong khi tìm kiếm hình thức.<br/>
<br/>
	<b> Hidden </ b> cột chứa các lĩnh vực có sẵn cho bạn như là một admin để thêm vào các mẫu đơn tìm kiếm.',
		'savebtn'	=> 'Bấm vào <b> Lưu & Triển khai </ b> sẽ lưu tất cả các thay đổi và làm cho họ hoạt động',
		'Hidden' 	=> '<b> Hidden </ b> lĩnh vực không xuất hiện trong các tìm kiếm.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong các lĩnh vực tìm kiếm.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'	
<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> DetailView</b>.<br/>
<br/>
	<b>Công cụ</ b> chứa các <b> Recycle Bin </ b> và các bố trí lĩnh vực và yếu tố có thể được thêm vào bố trí.<br>
<br>
	Thực hiện các thay đổi cho bố trí bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào việc bố trí.',
		'defaultquickcreate'=>'<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> QuickCreate </ b> hình thức.<br>
<br>
	Các QuickCreate hình thức xuất hiện trong subpanels cho các mô-đun khi được bấm vào nút Tạo.<br/>
<br/>
	<b> Công cụ </ b> chứa các <b> Recycle Bin </ b> và các lĩnh vực bố trí và yếu tố có thể được thêm vào bố trí.<br>
<br>
	Thực hiện các thay đổi cho bố trí bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào sự bố trí.',
		//this defualt will be used for edit view
		'default'	=> '<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> EditView </ b>.<br/>
<br/>
	<b> Công cụ </ b> chứa các <b> Recycle Bin </ b> và các trường lĩnh vực và yếu tố có thể được thêm vào các trường.<br>
<br>
	Thực hiện các thay đổi cho trường bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
	Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào việc bố trí		'saveBtn'	=> 'Nhấp vào <b>Lưu </ b> để lưu giữ những thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó.<br>
<br>
Những thay đổi sẽ không được hiển thị trong mô-đun, cho đến khi bạn lưu triển khai những thay đổi.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử
> hoán đổi
		.',
		'publishBtn'=> 'Nhấp vào <b>Lưu & Triển khai</ b> để lưu tất cả các thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó, và để thực hiện những thay đổi tích cực trong các mô-đun.<br>
<br>
The layout will immediately be displayed in the module.',
		'toolbox'	=> 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/>
<br/>
The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br>
<br>
The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/>
<br/>
Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/>
<br/>
The <b>Filler</b> field creates blank space in the layout where it is placed.',
		'panels'	=> 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/>
<br/>
You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/>
<br/>
Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
		'delete'	=> 'Drag and drop any element here to remove it from the layout',
		'property'	=> 'Edit The label displayed for this field. <br/>
<b>Tab Order</b> controls in what order the tab key switches between fields.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br>
<br>
Custom fields created for the module appear above the fields that are available for the module by default.<br>
<br>
To edit a field, click the <b>Field Name</b>.<br/>
<br/>
To create a new field, click <b>Add Field</b>.',
		'mbDefault'=>'The <b>Fields</b> that are available for the module are listed here by Field Name.<br>
<br>
To customize the label of the template field, click the Field Name.<br>
<br>
To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br>
<br>
After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
        'addField'	=> 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br>
<br>
Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br>
<br>
The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br>
<br>
Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br>
<br>
<b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br>
<br>
<b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br>
<br>
<b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br>
<br>
Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br>
<br>
The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br>
<br>
Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br>
<br>
Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br>
<br>
Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br>
<br>
Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br>
<br>
Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br>
<br>
Additional properties can be set for certain data types.',
		'editField' => 'The <b>Display Label</b> of a Sugar field can be customized. The other properties of the field can not be customized.<br>
<br>
Click <b>Clone</b> to create a new field with the same properties.',
        'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br>
<br>
Click <b>Clone</b> to create a new field with the same properties.<br>
<br>
To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Export customizations made in Studio by creating packages that can be uploaded into another Sugar instance through the <b>Module Loader</b>.<br>
<br>
First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br>
<br>
Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br>
<br>
Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
	    'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
	    'name'=>'This is the <b>Name</b> of the package. This name will be displayed during installation.',
	    'author'=>'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
	    'description'=>'This is the <b>Description</b> of the package that is displayed during installation.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b> area. <br/>
<br/>
Use the tools within this area to create and manage standard and custom modules and fields.',
		'studioBtn'	=> 'Use <b>Studio</b> to customize deployed modules.',
		'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
		'sugarPortalBtn' => 'Use <b>Sugar Portal Editor</b> to manage and customize the Sugar Portal.',
		'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
		'appBtn' 	=> 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
		'backBtn'	=> 'Return to the previous step.',
		'studioHelp'=> 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
		'moduleBtn'	=> 'Click to edit this module.',
		'moduleHelp'=> 'The components that you can customize for the module appear here.<br>
<br>
Click an icon to select the component to edit.',
		'fieldsBtn'	=> 'Create and customize <b>Fields</b> to store information in the module.',
		'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.'	,
	    'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.' ,
		'layoutsBtn'=> 'Customize the module <b>Layouts</b>.  The layouts are the different views of the module contaning fields.<br>
<br>
You can determine which fields appear and how they are organized in each layout.',
		'subpanelBtn'=> 'Determine which fields appear in the <b>Subpanels</b> in the module.',
		'portalBtn' =>'Customize the module <b>Layouts</b> that appear in the <b>Sugar Portal</b>.',
		'layoutsHelp'=> 'The module <b>Layouts</b> that can be customized appear here.<br>
<br>
The layouts display fields and field data.<br>
<br>
Click an icon to select the layout to edit.',
		'subpanelHelp'=> 'The <b>Subpanels</b> in the module that can be customized appear here.<br>
<br>
Click an icon to select the module to edit.',
        'newPackage'=>'Click <b>New Package</b> to create a new package.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
        'mbHelp'    => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
	    'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br>
<br>
The EditView is the form containing input fields for capturing user-entered data.',
	    'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br>
<br>
The DetailView displays user-entered field data.',
		'viewBtnDashlet' => 'Customize the module\'s <b>Sugar Dashlet</b>, including the Sugar Dashlet\'s ListView and Search.<br>
<br>
The Sugar Dashlet will be available to add to the pages in the Home module.',
	    'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br>
<br>
The Search results appear in the ListView.',
	    'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br>
<br>
Determine what fields can be used to filter records that appear in the ListView.',
		'viewBtnQuickCreate' =>  'Customize the module\'s <b>QuickCreate</b> layout.<br>
<br>
The QuickCreate form appears in subpanels and in the Emails module.',

	    'searchHelp'=> 'The <b>Search</b> forms that can be customized appear here.<br>
<br>
Search forms contain fields for filtering records.<br>
<br>
Click an icon to select the search layout to edit.',
	    'dashletHelp' =>'The <b>Sugar Dashlet</b> layouts that can be customized appear here.<br>
<br>
The Sugar Dashlet will be available to add to the pages in the Home module.',
	    'DashletListViewBtn' =>'The <b>Sugar Dashlet ListView</b> displays records based on the Sugar Dashlet search filters.',
	    'DashletSearchViewBtn' =>'The <b>Sugar Dashlet Search</b> filters records for the Sugar Dashlet listview.',
		'BasicSearchBtn' => 'Customize the <b>Basic Search</b> form that appears in the Basic Search tab in the Search area for the module.',
	    'AdvancedSearchBtn' => 'Customize the <b>Advanced Search</b> form that appears in the Advanced Search tab in the Search area for the module.',
	    'portalHelp' => 'Manage and customize the <b>Sugar Portal</b>.',
	    'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the Sugar Portal.',
	    'SPSync' => '<b>Sync</b> customizations to the Sugar Portal instance.',
	    'Layouts' => 'Customize the <b>Layouts</b> of the Sugar Portal modules.',
	    'portalLayoutHelp' => 'The modules within the Sugar Portal appear in this area.<br>
<br>
Select a module to edit the <b>Layouts</b>.',
		'relationshipsHelp' => 'All of the <b>Relationships</b> that exist between the module and other deployed modules appear here.<br>
<br>
The relationship <b>Name</b> is the system-generated name for the relationship.<br>
<br>
The <b>Primary Module</b> is the module that owns the relationships.  For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br>
<br>
The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br>
<br>
Click a column title to sort by the column.<br>
<br>
Click a row in the relationship table to view the properties associated with the relationship.<br>
<br>
Click <b>Add Relationship</b> to create a new relationship.<br>
<br>
Relationships can be created between any two deployed modules.',
        'relationshipHelp'=>'<b>Relationships</b> can be created between the module and another deployed module.<br>
<br>
Relationships are visually expressed through subpanels and relate fields in the module records.<br>
<br>
Select one of the following relationship <b>Types</b> for the module:<br>
<br>
<b>One-to-One</b> - Both modules\' records will contain relate fields.<br>
<br>
<b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br>
<br>
<b>Many-to-Many</b> - Both modules\' records will display subpanels.<br>
<br>
Select the <b>Related Module</b> for the relationship. <br>
<br>
If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br>
<br>
Click <b>Save</b> to create the relationship.',
		'editDropDownBtn' => 'Edit a global Dropdown',
		'addDropDownBtn' => 'Add a new global Dropdown',
	),
	'fieldsHelp'=>array(
		'default'=>'The <b>Fields</b> in the module are listed here by Field Name.<br>
<br>
The module template includes a pre-determined set of fields.<br>
<br>
To create a new field, click <b>Add Field</b>.<br>
<br>
To edit a field, click the <b>Field Name</b>.<br/>
<br/>
After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br>
<br>
The relationship <b>Name</b> is the system-generated name for the relationship.<br>
<br>
The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br>
<br>
The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br>
<br>
Click a column title to sort by the column.<br>
<br>
Click a row in the relationship table to view and edit the properties associated with the relationship.<br>
<br>
Click <b>Add Relationship</b> to create a new relationship.',
		'addrelbtn'=>'mouse over help for add relationship..',
		'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br>
<br>
Relationships are visually expressed through subpanels and relate fields in the module records.<br>
<br>
Select one of the following relationship <b>Types</b> for the module:<br>
<br>
<b>One-to-One</b> - Both modules\' records will contain relate fields.<br>
<br>
<b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br>
<br>
<b>Many-to-Many</b> - Both modules\' records will display subpanels.<br>
<br>
Select the <b>Related Module</b> for the relationship. <br>
<br>
If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br>
<br>
Click <b>Save</b> to create the relationship.',
	),
	'labelsHelp'=>array(
		'default'=> 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br>
<br>
Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br>
<br>
If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
		'saveBtn'=>'Click <b>Save</b> to save all changes.',
		'publishBtn'=>'Click <b>Save & Deploy</b> to save all changes and make them active.',
	),
	'portalSync'=>array(
	    'default' => 'Enter the <b>Sugar Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br>
<br>
Then enter a valid Sugar user name and password, and then click <b>Begin Sync</b>.<br>
<br>
The customizations made to the Sugar Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
	),
	'portalStyle'=>array(
	    'default' => 'You can customize the look of the Sugar Portal by using a style sheet.<br>
<br>
Select a <b>Style Sheet</b> to upload.<br>
<br>
The style sheet will be implemented in the Sugar Portal the next time a sync is performed.',
	),
),

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/>
<br/>
Each package can contain one or more modules.<br/>
<br/>
For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
			'somepackages'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/>
<br/>
After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br>
<br>
When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
			'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/>
<br/>
Click <b>New Module</b> to create a custom module for this package.<br/>
<br/>
After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/>
<br/>
To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br>
<br>
Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance. <br/>
<br/>
You can distribute the file to other users to upload and install within their own Sugar instances.',
			'create'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/>
<br/>
After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
			),
	'main'=>array(
		'welcome'=>'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/>
<br/>
To manage modules in the application, click <b>Studio</b>. <br/>
<br/>
To create custom modules, click <b>Module Builder</b>.',
		'studioWelcome'=>'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
	),
	'module'=>array(
		'somemodules'=>"Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your Sugar instance or <b>Publish</b> the package to be installed in the current Sugar instance or another instance using the <b>Module Loader</b>.<br/>
<br/>
To install the package directly within your Sugar instance, click <b>Deploy</b>.<br>
<br>
To create a .zip file for the package that can be loaded and installed within the current Sugar instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/>
<br/>
You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/>
<br/>
After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes." ,
		'editView'=> 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
		'create'=>'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/>
<br/>
Each module template contains a set of fields pertaining to the type of module described by the title.<br/>
<br/>
<b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/>
<br/>
<b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/>
<br/>
<b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/>
<br/>
<b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.<br/>
<br/>
Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
		'afterSave'=>'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/>
<br/>
To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/>
<br/>
To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/>
<br/>
To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/>
<br/>
To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
		'viewfields'=>'The fields in the module can be customized to suit your needs.<br/>
<br/>
You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/>
<br/>
You can edit the labels of the standard fields. The other properties of the standard fields are not editable. However, you can quickly create new fields that have similar properties by clicking a field name and then clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/>
<br/>
If you are customizing a new module, once the module has been installed, not all of the field properties can be edited.  Set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
		'viewrelationships'=>'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br>
<br>
To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
		'viewlayouts'=>'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/>
<br/>
The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br>
<br>
You can determine the module security using Layout customization along with <b>Role Management</b>.<br>
<br>
',
		'existingModule' =>'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br>
<br>
To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br>
<br>
If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
		'labels'=> 'The labels of the standard fields as well as custom fields can be changed.  Changing field labels will not affect the data stored in the fields.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
		'savebtn'	=> 'Clicking <b>Save</b> will save all changes and make them active.',
		'Hidden' 	=> 'Hidden fields are fields that are not currently available to users for use in list views.',
		'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
		'Default'	=> 'Default fields are displayed to users who have not created custom list view settings.'
	),

	'searchViewEditor'=>array(
		'modify'	=> 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
		'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
		'Hidden' 	=> 'Hidden fields are fields that will not be shown in the search view.',
		'Default'	=> 'Default fields will be shown in the search view.'
	),
	'layoutEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/>
<br/>
If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/>
<br/>
If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
		'publishBtn'=> 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
		'toolbox'	=> 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
		'panels'	=> 'This area shows how your layout will look to users of this module when it is depolyed.<br/>
<br/>
You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/>
<br/>
If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/>
<br/>
If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'dropdownaddbtn'=> 'Clicking this button adds a new item to the dropdown.',

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Customizations made in Studio within this instance can be packaged and deployed in another instance. <br>
<br>
Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br>
<br>
Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br>
<br>
Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
	    'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.
',
	    'name'=>'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
	    'author'=>'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br>
<br>
The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.
',
	    'description'=>'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Welcome to the <b>Developer Tools
</b1>
area. <br/>
<br/>
Use the tools within this area to create and manage standard and custom modules and fields.',
		'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
		'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
		'appBtn' 	=> 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
		'backBtn'	=> 'Return to the previous step.',
		'studioHelp'=> 'Use <b>Studio</b> to customize installed modules.',
		'moduleBtn'	=> 'Click to edit this module.',
		'moduleHelp'=> 'Select the module component that you would like to edit',
		'fieldsBtn'	=> 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/>
<br/>
You can edit and create custom fields here.',
		'labelsBtn' => 'Click <b>Save</b> to save your custom labels.'	,
		'layoutsBtn'=> 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
		'subpanelBtn'=> 'Edit what information is shown in this modules subpanels.',
		'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>
To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/>
<br/>
To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/>
<br/>
To change the columns which appear in the default list, click <b>List View</b>.<br/>
<br/>
To change the Basic and Advanced search form layouts, click <b>Search</b>.',
		'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
		'searchHelp' => 'Select a <b>Search</b> layout to edit.',
		'labelsBtn'	=> 'Edit the <b>Labels</b> to display for values in this module.',
        'newPackage'=>'Click <b>New Package</b> to create a new package.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/>
<br/>
Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/>
<br/>
To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/>
<br/>
A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/>
<br/>
Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
	),


),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Dropdown Editor',

//ASSISTANT
'LBL_AS_SHOW' => 'Show Assistant in future.',
'LBL_AS_IGNORE' => 'Ignore Assistant in future.',
'LBL_AS_SAYS' => 'Assistant Says:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Module Builder',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Dropdown Editor',
'LBL_EDIT_DROPDOWN'=>'Edit Dropdown',
'LBL_DEVELOPER_TOOLS' => 'Developer Tools',
'LBL_SUGARPORTAL' => 'Sugar Portal Editor',
'LBL_SYNCPORTAL' => 'Sync Portal',
'LBL_PACKAGE_LIST' => 'Package List',
'LBL_HOME' => 'Home',
'LBL_NONE'=>'-None-',

'LBL_ADD_FIELDS'=>'Add Custom Fields',
'LBL_AVAILABLE_SUBPANELS'=>'Available Subpanels',
'LBL_ADVANCED'=>'Advanced',
'LBL_ADVANCED_SEARCH'=>'Advanced Search',
'LBL_BASIC'=>'Basic',
'LBL_BASIC_SEARCH'=>'Basic Search',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Currency',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet ListView',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet Search',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet Search',
'LBL_DISPLAY_HTML'=>'Display HTML Code',
'LBL_DETAILVIEW'=>'DetailView',
'LBL_DROP_HERE' => '[Drop Here]',
'LBL_EDIT'=>'Edit',
'LBL_EDIT_LAYOUT'=>'Edit Layout',
'LBL_EDIT_ROWS'=>'Edit Rows',
'LBL_EDIT_COLUMNS'=>'Edit Columns',
'LBL_EDIT_LABELS'=>'Edit Labels',
'LBL_EDIT_FIELDS'=>'Edit Custom Fields',
'LBL_EDIT_PORTAL'=>'Edit Portal for ',
'LBL_EDIT_FIELDS'=>'Edit Fields',
'LBL_EDITVIEW'=>'EditView',
'LBL_FILLER'=>'(filler)',
'LBL_FIELDS'=>'Fields',
'LBL_FAILED_TO_SAVE' => 'Failed To Save',
'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
'LBL_HOMEPAGE_PREFIX' => 'My',
'LBL_LAYOUT_PREVIEW'=>'Layout Preview',
'LBL_LAYOUTS'=>'Layouts',
'LBL_LISTVIEW'=>'ListView',
'LBL_MODULES'=>'Modules',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'New Package',
'LBL_NEW_PANEL'=>'New Panel',
'LBL_NEW_ROW'=>'New Row',
'LBL_PACKAGE_DELETED'=>'Package Deleted',
'LBL_PUBLISHING' => 'Publishing ...',
'LBL_PUBLISHED' => 'Published',
'LBL_SELECT_FILE'=> 'Select File',
'LBL_SAVE_LAYOUT'=> 'Save Layout',
'LBL_SELECT_A_SUBPANEL' => 'Select a Subpanel',
'LBL_SELECT_SUBPANEL' => 'Select Subpanel',
'LBL_SUBPANELS' => 'Subpanels',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SEARCH_FORMS' => 'Search',
'LBL_SEARCH'=>'Search',
'LBL_STAGING_AREA' => 'Staging Area (drag and drop items here)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (click items to add to staging area)',
'LBL_TOOLBOX' => 'Toolbox',
'LBL_VIEW_SUGAR_FIELDS' => 'View Sugar Fields',
'LBL_VIEW_SUGAR_BIN' => 'View Sugar Bin',
'LBL_QUICKCREATE' => 'QuickCreate',
'LBL_EDIT_DROPDOWNS' => 'Edit a Global Dropdown',
'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
'LBL_BLANK' => '-blank-',
'LBL_TAB_ORDER' => 'Tab Order',

'LBL_DROPDOWN_TITLE_NAME' => 'Name',
'LBL_DROPDOWN_LANGUAGE' => 'Language',
'LBL_DROPDOWN_ITEMS' => 'List Items',
'LBL_DROPDOWN_ITEM_NAME' => 'Item Name',
'LBL_DROPDOWN_ITEM_LABEL' => 'Display Label',

//RELATIONSHIPS
'LBL_MODULE' => 'Module',
'LBL_MODULE' => 'Module',
'LBL_LHS_MODULE'=>'Primary Module',
'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio or Module Builder',
'LBL_RELATIONSHIPS'=>'Relationships',
'LBL_RELATIONSHIP_EDIT' => 'Edit Relationship',
'LBL_REL_NAME' => 'Name',
'LBL_REL_LABEL' => 'Label',
'LBL_REL_TYPE' => 'Type',
'LBL_RHS_MODULE'=>'Related Module',
'LBL_NO_RELS' => 'No Relationships',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Optional Condition' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Column',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Value',
'LBL_SUBPANEL_FROM'=>'Subpanel from',
'LBL_RELATIONSHIP_ONLY'=>'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
'LBL_ONETOONE' => 'One to One',
'LBL_ONETOMANY' => 'One to Many',
'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Select a function or component.',
'LBL_QUESTION_MODULE1' => 'Select a module.',
'LBL_QUESTION_EDIT' => 'Select a module to edit.',
'LBL_QUESTION_LAYOUT' => 'Select a layout to edit.',
'LBL_QUESTION_SUBPANEL' => 'Select a subpanel to edit.',
'LBL_QUESTION_SEARCH' => 'Select a search layout to edit.',
'LBL_QUESTION_MODULE' => 'Select a module component to edit.',
'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
'LBL_QUESTION_EDITOR' => 'Select a tool.',
'LBL_QUESTION_DROPDOWN' => 'Select a dropdown to edit, or create a new dropdown.',
'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relate To',
'LBL_NAME'=>'Name',
'LBL_LABELS'=>'Labels',
'LBL_MASS_UPDATE'=>'Mass Update',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Default Value',
'LBL_REQUIRED'=>'Required',
'LBL_DATA_TYPE'=>'Type',
'LBL_HCUSTOM'=>'CUSTOM',
'LBL_HDEFAULT'=>'DEFAULT',
'LBL_LANGUAGE'=>'Language:',


//SECTION
'LBL_SECTION_EDLABELS' => 'Edit Labels',
'LBL_SECTION_PACKAGES' => 'Packages',
'LBL_SECTION_PACKAGE' => 'Package',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
'LBL_SECTION_PROPERTIES' => 'Properties',
'LBL_SECTION_DROPDOWNED' => 'Edit Dropdown',
'LBL_SECTION_HELP' => 'Help',
'LBL_SECTION_ACTION' => 'Action',
'LBL_SECTION_MAIN' => 'Main',
'LBL_SECTION_EDPANELLABEL' => 'Edit Panel Label',
'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
'LBL_SECTION_DEPLOY' => 'Deploy',
'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Default',
'LBL_HIDDEN'=>'Hidden',
'LBL_AVAILABLE'=>'Available',
'LBL_LISTVIEW_DESCRIPTION'=>'There are three columns displayed below. The <b>Default</b> column contains fields that are displayed in a list view by default.  The <b>Additional</b> column contains fields that a user can choose to use for creating a custom view.  The <b>Available</b> column displays fields availabe for you as an admin to add to the Default or Additional columns for use by users.',
'LBL_LISTVIEW_EDIT'=>'List View Editor',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Preview',
'LBL_MB_RESTORE'=>'Restore',
'LBL_MB_DELETE'=>'Delete',
'LBL_MB_COMPARE'=>'Compare',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Add',
'LBL_BTN_SAVE'=>'Save',
'LBL_BTN_SAVE_CHANGES'=>'Save Changes',
'LBL_BTN_DONT_SAVE'=>'Discard Changes',
'LBL_BTN_CANCEL'=>'Cancel',
'LBL_BTN_CLOSE'=>'Close',
'LBL_BTN_UPLOAD'=>'Upload',
'LBL_BTN_SAVEPUBLISH'=>'Save & Deploy',
'LBL_BTN_NEXT'=>'Next',
'LBL_BTN_BACK'=>'Back',
'LBL_BTN_CLONE'=>'Clone',
'LBL_BTN_ADDCOLS'=>'Add Columns',
'LBL_BTN_ADDROWS'=>'Add Rows',
'LBL_BTN_ADDFIELD'=>'Add Field',
'LBL_BTN_ADDDROPDOWN'=>'Add Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Sort Ascending',
'LBL_BTN_SORT_DESCENDING'=>'Sort Descending',
'LBL_BTN_EDLABELS'=>'Edit Labels',
'LBL_BTN_UNDO'=>'Undo',
'LBL_BTN_REDO'=>'Redo',
'LBL_BTN_ADDCUSTOMFIELD'=>'Add Custom Field',
'LBL_BTN_EXPORT'=>'Export Customizations',
'LBL_BTN_DUPLICATE'=>'Duplicate',
'LBL_BTN_PUBLISH'=>'Publish',
'LBL_BTN_DEPLOY'=>'Deploy',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Delete',
'LBL_BTN_VIEW_LAYOUTS'=>'View Layouts',
'LBL_BTN_VIEW_FIELDS'=>'View Fields',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'View Relationships',
'LBL_BTN_ADD_RELATIONSHIP'=>'Add Relationship',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Field Already Exists',
'ERROR_INVALID_KEY_VALUE'=> "Error: Invalid Key Value: [']",
'ERROR_NO_HISTORY' => 'No history files found',





































//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Package Name:',
'LBL_MODULE_NAME'=>'Module Name:',
'LBL_AUTHOR'=>'Author:',
'LBL_DESCRIPTION'=>'Description:',
'LBL_KEY'=>'Key:',
'LBL_ADD_README'=>' Readme',
'LBL_MODULES'=>'Modules:',
'LBL_LAST_MODIFIED'=>'Last Modified:',
'LBL_NEW_MODULE'=>'New Module',
'LBL_LABEL'=>'Label:',
'LBL_LABEL_TITLE'=>'Label',
'LBL_WIDTH'=>'Width',
'LBL_PACKAGE'=>'Package:',
'LBL_TYPE'=>'Type:',
'LBL_TEAM_SECURITY'=>'Team Security',
'LBL_ASSIGNABLE'=>'Assignable',
'LBL_PERSON'=>'Person',
'LBL_COMPANY'=>'Company',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Sale',
'LBL_FILE'=>'File',
'LBL_NAV_TAB'=>'Navigation Tab',
'LBL_CREATE'=>'Create',
'LBL_LIST'=>'List',
'LBL_LIST_VIEW'=>'List View',
'LBL_HISTORY'=>'View History',
'LBL_ACTIVITIES'=>'Activities',
'LBL_SEARCH'=>'Search',
'LBL_NEW'=>'New',
'LBL_TYPE_BASIC'=>'basic',
'LBL_TYPE_COMPANY'=>'company',
'LBL_TYPE_PERSON'=>'person',
'LBL_TYPE_ISSUE'=>'issue',
'LBL_TYPE_SALE'=>'sale',
'LBL_TYPE_FILE'=>'file',
'LBL_RSUB'=>'This is the subpanel that will be displayed in your module',
'LBL_MSUB'=>'This is the subpanel that your module provides to the related module for display',
'LBL_MB_IMPORTABLE'=>'Importing',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] was deleted',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Export Customizations',
'LBL_EC_NAME'=>'Package Name:',
'LBL_EC_AUTHOR'=>'Author:',
'LBL_EC_DESCRIPTION'=>'Description:',
'LBL_EC_KEY'=>'Key:',
'LBL_EC_CHECKERROR'=>'Please select a module.',
'LBL_EC_CUSTOMFIELD'=>'customized field(s)',
'LBL_EC_CUSTOMLAYOUT'=>'customized layout(s)',
'LBL_EC_NOCUSTOM'=>'No modules have been customized.',
'LBL_EC_EMPTYCUSTOM'=>'has empty customizations.',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
'LBL_UNDEFINED' => 'undefined',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
'LBL_AJAX_TIME_DEPENDENT' => 'A time dependent action is in progress. Please wait and try again in a few seconds.',
'LBL_AJAX_LOADING' => 'Loading...',
'LBL_AJAX_DELETING' => 'Deleting...',
'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',

//JS
'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',

'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
'LBL_JS_VALIDATE_NAME'=>'Name - Must be alphanumeric with no spaces and starting with a letter',
'LBL_JS_VALIDATE_KEY'=>'Key - Must be alphanumeric with no spaces and starting with a letter',
'LBL_JS_VALIDATE_LABEL'=>'Please enter a label that will be used as the Display Name for this module',
'LBL_JS_VALIDATE_TYPE'=>'Please select the type of module you wish to build from the list above',
'LBL_JS_VALIDATE_REL_NAME'=>'Name - Must be alphanumeric with no spaces',
'LBL_JS_VALIDATE_REL_LABEL'=>'Label - please add a label that will be displayed above the subpanel',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting a custom field will delete all the data related to the custom field, and will remove the field from any layout you have added it to',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'This will make this relationship permanent. Are you sure you wish to deploy this relationship?',
'LBL_CONFIRM_DONT_SAVE' => 'Changes have been made since you last saved, would you like to save?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Save Changes?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Select the appropriate data type based on the type of data that will be entered into the field.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Yes</b>: The field will be included in an import operation.<br>
<b>No</b>: The field will not be included in an import.<br>
<b>Required</b>: A value for the field must be provided in any import.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br>
<b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'



,

'fieldTypes' => array(
				'varchar'=>'TextField', 
				'int'=>'Integer', 
				'float'=>'Decimal',
				'bool'=>'Checkbox',
				'enum'=>'DropDown',
				'multienum' => 'MultiSelect',
                'date'=>'Date', 
                'phone' => 'Phone', 
                'currency' => 'Currency', 
                'html' => 'HTML', 
                'radioenum' => 'Radio',
                'relate' => 'Relate', 
                'address' => 'Address', 
                'text' => 'TextArea', 
                'url' => 'Link', 
                'iframe' => 'IFrame', 
                'encrypt'=>'Encrypt'
),

'parent' => 'Flex Relate'
); 