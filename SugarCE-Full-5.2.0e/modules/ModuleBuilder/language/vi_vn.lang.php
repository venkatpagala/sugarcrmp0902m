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




		'create'=>'Cung cấp một<b>Name</b> cho module.<b> Nhãn </ b> mà bạn cung cấp sẽ xuất hiện trong thẻ tab chuyển hướng. <br/>
<br/>
Chọn để hiển thị một chuyển hướng thẻ cho các module bằng cách kiểm tra <b> Danh mục chính tab </ b> ô trống.<br/>
<br/>
Sau đó, chọn kiểu module, bạn muốn tạo. <br/>
<br/>
Chọn một kiểu mẫu. Mỗi mẫu có chứa một bộ các lĩnh vực cụ thể, cũng như được xác định trước khi bố trí, sử dụng như là một cơ sở cho các module của bạn. <br/>
<br/>
Click <b>Save</b> để tạo module.',

		'modify'=>'Bạn có thể thay đổi các module tài sản hoặc tùy chỉnh <b> trường </ b>, <b> Quan hệ </ b> và <b> bày </ b> có liên quan đến các module.',
		'importable'=>'Kiểm tra <b>Importable</b> ô trống sẽ cho phép nhập khẩu cho các module này.<br>
<br>
Một liên kết tới nhập Wizard sẽ xuất hiện trong các phím tắt trong bảng điều khiển module.The Wizard tạo điều kiện nhập, nhập của các nguồn dữ liệu từ bên ngoài vào các tùy chỉnh module.',
		'team_security'=>'Kiểm tra<b>Team Security</b> ô trống sẽ cho phép đội ngũ bảo mật này cho các module. <br/>
<br/>
Nếu đội ngũ bảo mật được kích hoạt, các đội lựa chọn lĩnh vực này sẽ xuất hiện trong các bản ghi trong các module ',
		'reportable'=>'Kiểm tra các hộp này sẽ cho phép các module này để có bảng báo cáo hoạt động của nó.',
		'assignable'=>'Kiểm tra các hộp này sẽ cho phép ghi lại trong một module này sẽ được giao cho một người sử dụng lựa chọn.',
		'has_tab'=>'Kiểm tra <b>Navigation Tab</b>sẽ cung cấp một thẻ chuyển hướng cho các module.',
		'acl'=>'Kiểm tra các hộp này sẽ cho phép kiểm soát truy cập vào mô đun này, bao gồm cả cấp bậc lĩnh vực an ninh.',
		'studio'=>'Kiểm tra các hộp này sẽ cho phép các quản trị viên này để tùy chỉnh mô-đun trong vòng Studio.',
		'audit'=>'Kiểm tra các hộp này sẽ cho phép kiểm toán cho các module này. Thay đổi đối với một số lĩnh vực sẽ được ghi lại để các quản trị viên có thể xem xét việc thay đổi lịch sử.',
		'viewfieldsbtn'=>'Nhấp vào <b>View Fields</b>để xem các trường liên kết với các mô-đun và để tạo và chỉnh sửa các tuỳ chỉnh lĩnh vực.',
		'viewrelsbtn'=>'Nhấp vào <b> xem quan hệ </ b> để xem những mối quan hệ liên kết với các phân hệ này và để tạo ra các mối quan hệ mới.',
		'viewlayoutsbtn'=>'Nhấp vào <b>xem & bày </ b> để xem bố trí cho các module và để tùy chỉnh trong lĩnh vực sắp xếp bố trí.',
		'duplicatebtn'=>'Nhấp vào <b>Duplicate</b>để sao chép thuộc tính của các module mới vào một module và để hiển thị các module mới. <br/>
<br/>
Đối với các module mới, tên mới sẽ được tạo ra tự động của một số appending vào cuối tên của module được sử dụng để tạo mới.',
		'deletebtn'=>'Nhấp vào <b> Delete </ b> để xóa mô-đun này.',
		'name'=>'Đây là <b>Tên</b> hiện tại của module.<br/>
<br/>
Tên phải được alphanumeric, và phải bắt đầu bằng một chữ cái và các nội dung không có dấu cách. (Ví dụ: HR_Management)',
		'label'=>'Đây là <b> Nhãn </ b> sẽ xuất hiện trong các thẻ tab chuyển hướng cho các module. ',
		'savebtn'=>'Nhấp vào <b>Lưu</ b> để lưu tất cả các dữ liệu nhập liên quan tới các module.',
		'type_basic'=>'<b> Cơ bản </ b> cung cấp các loại mẫu cơ bản lĩnh vực, chẳng hạn như tên, chỉ để, đội, ngày tạo mô tả và các lĩnh vực.',
		'type_company'=>'<b> Công ty </ b> tổ chức cung cấp các loại mẫu-lĩnh vực cụ thể, chẳng hạn như Công ty, Công nghiệp và Địa chỉ. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn tài khoản module.',
		'type_issue'=>'<b> Số </ b> cung cấp các loại mẫu trường hợp-và-lỗi lĩnh vực cụ thể, chẳng hạn như số, tình trạng, và ưu tiên mô tả. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn trường hợp và module lỗi Tracker.',
		'type_person'=>'<b> Cá nhân </ b> cung cấp các loại mẫu riêng lĩnh vực cụ thể, chẳng hạn như Salutation, tiêu đề, tên, địa chỉ và số điện thoại. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn địa chỉ liên lạc và module tiềm năng.',
		'type_sale'=>'<b> Bán </ b> cung cấp các loại mẫu cơ hội lĩnh vực cụ thể, chẳng hạn như Lead tháng, giai đoạn, số lượng và Probability. <br/>
<br/>
sử dụng mẫu này để tạo ra module tương tự với những tiêu chuẩn cơ hội module.',
		'type_file'=>'<b> Tệp tin </ b> cung cấp các mẫu văn bản lĩnh vực cụ thể, chẳng hạn như tên tập tin, loại hình tài liệu, và ngày xuất bản. <br>
<br>
Sử dụng mẫu này để tạo ra module tương tự với những tiêu chuẩn văn bản module.',

	),
	'dropdowns'=>array(
		'default' => 'Tất cả các <b> Dropdowns </ b> cho các ứng dụng được liệt kê ở đây.<br>
<br>
Các dropdowns có thể được sử dụng cho các lĩnh vực dropdown trong bất kỳ module.<br>
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
		'savebtn'	=> 'Nhấp vào Lưu & Triển khai <b> </ b> để lưu các thay đổi bạn đã thực hiện và để làm cho chúng hoạt động trong các module.',
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
	Các QuickCreate hình thức xuất hiện trong subpanels cho các module khi được bấm vào nút Tạo.<br/>
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
	Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào việc bố trí',	
'saveBtn'	=> 'Nhấp vào <b>Lưu </ b> để lưu giữ những thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó.<br>
<br>
Những thay đổi sẽ không được hiển thị trong module, cho đến khi bạn lưu triển khai những thay đổi.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử
> hoán đổi
		.',
		'publishBtn'=> 'Nhấp vào <b>Lưu & Triển khai</ b> để lưu tất cả các thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó, và để   thực hiện những thay đổi tích cực trong các module.<br>
<br>
	
Việc bố trí ngay lập tức sẽ được hiển thị trong các module.',
		'toolbox'	=> '<b> Công cụ </ b> chứa các <b> Recycle Bin </ b>, thêm các yếu tố bố trí và thiết lập các lĩnh vực có sẵn để thêm vào việc bố trí.<br/>
<br/>
Các thành phần và các trường trong các lĩnh vực có thể được kéo và thả vào trong hộp công cụ.<br>
<br>
	Các thành phần được bố trí <b> Panels </ b> và <b> Hàng </ b>. Thêm một hàng hoặc một bảng điều khiển mới cho bố trí thêm địa điểm cung cấp trong các lĩnh vực bố trí cho trường.<br/>
<br/>
	Kéo và thả bất kỳ trường nào vào hộp công cụ hoặc bố trí vào một vị trí để trao đổi các địa điểm của cả hai trường.<br/>
<br/>
	<b> Filler </ b> tạo ra không gian trống trong bố trí nơi mà nó được đặt.',
		'panels'	=> '<b> Bố trí </ b> khu vực cung cấp một quan điểm về cách thức bố trí sẽ xuất hiện trong các module khi những thay đổi đã thực hiện bố trí được tuyển dụng.<br/>
<br/>
Bạn có thể reposition lĩnh vực, các hàng và bảng bằng cách kéo và thả chúng ở vị trí mong muốn .<br/>
<br/>
Hủy bỏ yếu tố bằng cách kéo và thả chúng ở trong <b> Recycle Bin </ b> trong việc đến đây, hoặc thêm các thành phần và các lĩnh vực mới bằng cách kéo chúng từ <b> hộp công cụ</ b> s và thả chúng ở vị trí mong muốn trong việc bố trí.',
		'delete'	=> 'Kéo và thả bất kỳ thành phần nào ở đây để xoá bỏ nó từ người cài đặt',
		'property'	=> 'Hiệu chỉnh các nhãn hiển thị cho trường này. <br/>
<b>Tab Order</b> kiểm soát những tab yêu cầu key giữa các trường.',
	),
	'fieldsEditor'=>array(
		'default'	=> '<b> Trường tên</ b> có sẵn cho các module được liệt kê ở đây<br>
<br>
	Tuỳ chỉnh cho các trường tạo ra mô-đun xuất hiện ở trên các trường mà có sẵn cho các module mặc định.<br>
<br>
	Để chỉnh sửa một trường, bấm vào <b> Trường Tên </ b>.<br/>
<br/>
	Để tạo một lĩnh vực mới, bấm vào <b> Thêm Trường </ b>.',
		'mbDefault'=>'<b> Trường </ b> có sẵn cho các module được liệt kê ở đây bởi Trường Tên.<br>
<br>
 	Để tùy chỉnh nhãn của các trường mẫu, hãy nhấp vào Trường Tên.<br>
<br>
Để tạo một lĩnh vực mới, bấm vào <b> Thêm Trường </ b>. Các nhãn cùng với các tài sản khác của các lĩnh vực mới có thể được sửa đổi sau khi tạo ra bằng cách nhấp vào trường Tên.<br>
<br>
	Sau khi triển khai module là, các lĩnh vực mới tạo trong Module Builder được coi như là tiêu chuẩn trong các lĩnh vực triển khai module trong Studio',
        'addField'	=> 'Chọn một <b>Loại Dữ liệu </ b> cho các lĩnh vực mới. Loại xác định những gì mà bạn chọn loại ký tự có thể được nhập vào cho các trường. Ví dụ, chỉ số điện thoại là số nguyên có thể được tham gia vào trường<br>
<br>
Cung cấp một <b> Tên </ b> cho các lĩnh vực. Tên phải được alphanumeric và phải không được chứa bất kỳ dấu cách. Dưới là hợp lệ.<br>
<br>
	Hiển thị <b> Nhãn </ b> là các nhãn mà sẽ xuất hiện cho các trường bố trí trong các module. Các hệ thống <b> Nhãn </ b> được sử dụng để tham khảo các trường trong các mã.<br>
<br>
	Tùy thuộc vào loại dữ liệu được lựa chọn cho các lĩnh vực, một số hoặc tất cả các tài sản sau đây có thể được thiết lập cho các lĩnh vực:<br>
<br>
<b> Văn bản trợ giúp</ b> sẽ xuất hiện tạm thời trong khi một người dùng hovers trên các lĩnh vực và có thể được sử dụng để nhắc nhở người sử dụng cho các loại hình nhập mong muốn.<br>
<br>
<b> Văn bản thảo luận</ b> là chỉ nhìn thấy trong vòng Studio & / hoặc Module Builder, và có thể được dùng để mô tả các lĩnh vực cho các quản trị viên.<br>
<br>
<b> Giá trị mặc định </ b> sẽ xuất hiện trong cùng lĩnh vực. Người dùng có thể nhập một giá trị mới trong các lĩnh vực hoặc sử dụng các giá trị mặc định.<br>
<br>
Chọn <b> Mass Cập nhật </ b> ô trống để có thể sử dụng Mass Cập nhật tính năng cho các trường.<br>
<br>
<b> Kích thước tối đa </ b> giá trị sẽ xác định số lượng tối đa ký tự có thể được nhập vào trong cùng trường.<br>
<br>
Chọn <b>Trường yêu cầu</ b> ô trống để làm cho các trường cần thiết. Một giá trị phải được cung cấp cho các trường để có thể lưu một bản ghi có chứa các trường.<br>
<br>
Chọn <b> Bảng báo cáo </ b> ô trống để cho phép các trường sẽ được sử dụng để cho các bộ lọc và hiển thị dữ liệu trong báo cáo.<br>
<br>
Chọn <b> Kiểm toán </ b> ô trống để có thể theo dõi các thay đổi vào các lĩnh vực trong Thay đổi Đăng nhập<br>
Chọn một tùy chọn ở trong <b> Bảng nhập </ b> cho phép, không cho phép hoặc yêu cầu các trường để được nhập vào trong nhập khẩu Wizard. <br>
<br>
Chọn một tùy chọn ở trong <b>Hợp nhất </ b> để kích hoạt hay vô hiệu hóa các tim bản sao và các tính năng hợp nhất. <br>
<br>
Các tài sản có thể được đặt cho một số loại dữ liệu.',
		'editField' => 'Hiển thị <b> Nhãn </ b> của một trường Sugar có thể được tùy chỉnh. Việc các đặc tính khác của các trường có thể không được tùy chỉnh. <br>
<br>
Nhấp vào <b> clone </ b> để tạo ra một lĩnh vực mới với cùng một thuộc tính.',
        'mbeditField' => 'Hiển thị <b> Nhãn </ b> của một trường mẫu có thể được tùy chỉnh. Việc các tài sản khác của các trường có thể không được tùy chỉnh. <br>
<br>
Nhấp vào <b> clone </ b> để tạo ra một lĩnh vực mới với cùng một thuộc tính.<br>
<br>
Để loại bỏ một trường mẫu để nó không hiển thị trong các mô-đun, xoá bỏ những trường từ  <b>Layout </b>thích hợp.'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Tuỳ chỉnh xuất khẩu thực hiện trong Studio bằng cách tạo ra các gói có thể được tải lên thành một đường thông qua các <b> Modul tải</b>.<br>
<br>
Trước tiên, cung cấp một gói phần mềm <b> Tên </ b>. Bạn có thể cung cấp cho <b> Tác giả </ b> và <b> Mô tả </ b> thông tin cho các gói phần mềm cũng như.<br>
<br>
Lựa chọn Modul (s) có chứa các tuỳ chỉnh mà bạn muốn xuất ra. Chỉ có Modul chứa tuỳ chỉnh sẽ xuất hiện để bạn lựa chọn. <br>
<br>
Sau đó bấm vào <b> Xuất ra </ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh.',
	    'exportCustomBtn'=>'Nhấp vào <b>Xuất ra </ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh mà bạn muốn xuất ra.',
	    'name'=>'Đây là <b> Tên </ b> của gói. Tên gọi này sẽ được hiển thị trong quá trình cài đặt.',
	    'author'=>'Đây là <b> Tác giả </ b> được hiển thị trong quá trình cài đặt như là tên của tổ chức đó tạo ra các gói phần mềm. Tác giả có thể được, hoặc một cá nhân hay một công ty.',
	    'description'=>'Đây là <b> Mô tả </ b> của gói được hiển thị trong quá trình cài đặt.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Chào mừng bạn đến với khu vực <b> phát triển công cụ </ b>. <br/>
<br/>
Sử dụng các công cụ trong khu vực này để tạo và quản lý theo tiêu chuẩn và tùy chỉnh mô-đun và các trường.',
		'studioBtn'	=> 'Sử dụng <b> Studio </ b> để tùy chỉnh, triển khai module.',
		'mbBtn'		=> 'Sử dụng <b> Module Builder </ b> để tạo ra module mới.',
		'sugarPortalBtn' => 'Sử dụng <b>Biên soạn Sugar Portal </ b> để quản lý và tuỳ chỉnh Sugar Portal,.',
		'dropDownEditorBtn' => 'Sử dụng <b>Biên soạn Dropdown</ b> để thêm và chỉnh sửa dropdowns toàn cầu cho các lĩnh vực dropdown.',
		'appBtn' 	=> 'Áp dụng chế độ là nơi bạn có thể tuỳ chỉnh các thuộc tính của chương trình, chẳng hạn như có bao nhiêu TPS các báo cáo được hiển thị trên trang chủ',
		'backBtn'	=> 'Quay trở lại trang trước',
		'studioHelp'=> 'Sử dụng <b> Studio </ b> để xác định xem những gì và làm thế nào để thông tin được hiển thị trong các module.',
		'moduleBtn'	=> 'Nhấp vào để chỉnh sửa module này.',
		'moduleHelp'=> 'Các thành phần mà bạn có thể tùy chỉnh cho các mô-đun xuất hiện ở đây.<br>
<br>
Click vào một biểu tượng để lựa chọn thành phần để chỉnh sửa.',
		'fieldsBtn'	=> 'Tạo và chỉnh <b> trường </ b> để lưu trữ thông tin trong các module.',
		'labelsBtn' => 'Hiệu chỉnh <b> Nhãn </ b> là hiển thị cho các trường và các tiêu đề trong các module.'	,
	    'relationshipsBtn' => 'Thêm mới hoặc xem tồn tại <b> Quan hệ </ b> cho các module.' ,
		'layoutsBtn'=> 'Tuỳ chỉnh module <b>Layout </ b>.Quan điểm của các module contaning lĩnh vực là khác nhau.<br>
<br>
Bạn có thể quyết định những trường xuất hiện và cách thức chúng được bố trí trong mỗi tổ chức.',
		'subpanelBtn'=> 'Quyết định những lĩnh vực xuất hiện trong các <b> Subpanels </ b> trong các mô-đun.',
		'portalBtn' =>'Tuỳ chỉnh module <b>Layout</ b> mà xuất hiện trong các <b> Sugar Portal </ b>.',
		'layoutsHelp'=> 'Những module<b> Layout </ b> có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các lĩnh vực bố trí hiển thị và các dữ liệu<br>
<br>
Nhấp vào một biểu tượng để lựa chọn bố trí để chỉnh sửa.',
		'subpanelHelp'=> '<b> Subpanels </ b> trong các module có thể được tùy biến xuất hiện ở đây.<br>
<br>
Nhấp vào vào một biểu tượng để lựa chọn modul để chỉnh sửa.',
        'newPackage'=>'Nhấp vào <b>Gói mới</ b> để tạo ra một gói phần mềm mới.',
        'exportBtn' => 'Nhấp vào <b>Tùy chỉnh hàng xuất ra</ b> để tạo ra và tải về một gói phần mềm có chứa tuỳ chỉnh và được thực hiện trong Studio cho module.',
        'mbHelp'    => 'Sử dụng <b> Module Builder </ b> để tạo ra các gói có chứa module tuỳ chỉnh dựa trên tiêu chuẩn hay tùy chỉnh các đối tượng.',
	    'viewBtnEditView' => 'Tuỳ chỉnh module <b> EditView </ b> Layout.<br>
<br>
Các EditView là một hình thức có chứa dữ liệu vào lĩnh vực capturing cho người sử dụng nhập dữ liệu.',
	    'viewBtnDetailView' => 'Tuỳ chỉnh module \<b> DetailView </ b> Layout.<br>
<br>
Các DetailView hiển thị cho người dùng nhập vào trường dữ liệu.',
		'viewBtnDashlet' => 'Tuỳ chỉnh module \  <b> Sugar Dashlet </ b>, bao gồm cả việc Sugar Dashlet \' s ListView và Tìm kiếm.<br>
<br>
Các Sugar Dashlet sẽ có sẵn để thêm vào các trang web trong mô-đun Trang chủ.',
	    'viewBtnListView' => 'Tuỳ chỉnh module\ <b> ListView </ b> Layout.<br>
<br>
Các kết quả tìm kiếm xuất hiện trong ListView.',
	    'searchBtn' => 'Tuỳ chỉnh module \ <b> Tìm kiếm </ b> Layout.<br>
<br>
Xác định những trường có thể được dùng để lọc các hồ sơ liên quan xuất hiện trong ListView.',
		'viewBtnQuickCreate' =>  'Tuỳ chỉnh module \ <b> ListView </ b> Layout.<br>
<br>
Các hình thức tạo nhanh xuất hiện trong subpanels và email trong modul.',

	    'searchHelp'=> '<b>Các hình thức tìm kiếm </ b>có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các hình thức tìm kiếm chứa các lĩnh vực để lọc các bộ hồ sơ.<br>
<br>
Nhấp vào một biểu tượng để lựa chọn bố trí tìm kiếm để chỉnh sửa.',
	    'dashletHelp' =>'<b>Sugar Dashlet </ b>Layout có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các Sugar Dashlet sẽ có sẵn để thêm vào các trang web trong module Trang chủ.',
	    'DashletListViewBtn' =>'	
<b> Mía đường Dashlet ListView </ b> sẽ hiển thị hồ sơ, dựa vào các Dashlet Mía đường tìm kiếm các bộ lọc.',
	    'DashletSearchViewBtn' =>'<b> Sugar Dashlet Tìm kiếm </ b> các bộ lọc hồ sơ cho các danh sách xem Dashlet.',
		'BasicSearchBtn' => 'Tuỳ chỉnh <b>Tìm kiếm cơ bản </ b> hình thức xuất hiện trong các thẻ tab Tìm kiếm, Tìm kiếm khu vực cho các mô-đun.',
	    'AdvancedSearchBtn' => 'Tùy chỉnh <b> Tìm kiếm nâng cao </ b> hình thức xuất hiện trong thẻ tab tìm kiếm nâng cao ,Tìm kiếm trong khu vực cho các modul ".',
	    'portalHelp' => 'Quản lý và tuỳ chỉnh <b> Sugar Portal </ b>.',
	    'SPUploadCSS' => 'Tải lên <b>phong cách trang Sheet</b> cho Sugar Portal.',
	    'SPSync' => '<b> Đồng bộ hoá </ b> tuỳ chỉnh cho Sugar Portal.',
	    'Layouts' => 'Tuỳ chỉnh <b> Layout </ b> của Sugar Portal, module.',
	    'portalLayoutHelp' => 'Những module trong Sugar Portal, xuất hiện trong khu vực này.<br>
<br>
Chọn một modul để chỉnh sửa <b> Layout </ b>.',
		'relationshipsHelp' => 'Tất cả các <b> Quan hệ </ b> mà còn tồn tại giữa các phân hệ và mô-đun triển khai khác xuất hiện ở đây.<br>
<br>
Các mối quan hệ <b> Tên </ b> là các hệ thống tạo ra tên cho mối quan hệ.<br>
<br>
<b>Modul chính thức</ b> là các modul đó sở hữu các mối quan hệ. Ví dụ, tất cả các thuộc tính của các mối quan hệ đó có tài khoản cho các mô-đun chính là mô-đun sẽ được lưu trong cơ sở dữ liệu tài khoản.<br>
<br>
<b> Type </ b> là loại có thể có được mối quan hệ giữa các module chính và các <b> module liên quan </ b>. <br>
<br>
Nhấp vào một tiêu đề cột để sắp xếp theo cột.<br>
<br>
Nhấp vào một hàng trong các mối quan hệ bảng để xem những tài sản gắn liền với mối quan hệ<br>
<br>
Nhấp vào  <b>Thêm mối quan hệ </ b> để tạo ra một mối quan hệ mới.<br>
<br>
Quan hệ có thể được tạo ra bất kỳ giữa hai modul triển khai .',
        'relationshipHelp'=>'<b> Quan hệ </ b> có thể được tạo ra giữa các phân hệ khác và module triển khai .<br>
<br>
Được bày tỏ mối quan hệ trực quan thông qua subpanels và các lĩnh vực liên quan trong hồ sơ module.<br>
<br>
Chọn một trong những mối quan hệ sau đây <b> Loại </ b> cho các Modul:<br>
<br>
	
<b>Một - Một </ b> - Cả hai module \sẽ chứa các trường hồ sơ liên quan.<br>
<br>
<b>	Một - Nhiều </ b> - Các module chính \ hồ sơ sẽ chứa một subpanel, và module liên quan  \hồ sơ sẽ chứa một trường liên quan.<br>
<br>
<b>	
Nhiều - Nhiều </ b> - Cả hai module \hồ sơ sẽ hiển thị subpanels.<br>
<br>
Chọn <b> module liên quan </ b> cho các mối quan hệ. <br>
<br>
Nếu các loại hình liên quan đến mối quan hệ subpanels, chọn subpanel xem thích hợp cho các module.<br>
<br>
	
Nhấp vào <b>Lưu</ b> để tạo ra các mối quan hệ',
		'editDropDownBtn' => 'Sửa đổi toàn bộ, Dropdown',
		'addDropDownBtn' => 'Thêm mới toàn bộ Dropdown',
	),
	'fieldsHelp'=>array(
		'default'=>'<b> Trường </ b> trong các module được liệt kê ở đâu bởi Trường Tên.<br>
<br>
Một mẫu Modul bao gồm các trường trước khi quyết định<br>
<br>
Để tạo một trường mới, bấm vào <b> Thêm Trường </ b>. <br>
<br>
Để chỉnh sửa một trường, bấm vào <b> Tên Trường </ b>. <br/>
<br/>
Sau khi triển khai module là, các trường mới tạo trong mục xây dựng module, cùng với các mẫu trường, được coi như là tiêu chuẩn trong lĩnh vực Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'<b> Quan hệ </ b> đã được tạo ra giữa các module và các module được xuất hiện ở đây.<br>
<br>
Các mối quan hệ <b> Tên </ b> là các hệ thống tạo ra tên cho mối quan hệ. <br>
<br>
<b> Module chính thức </ b> là các module sở hữu các mối quan hệ. Các mối quan hệ thuộc tính sẽ được lưu trong cơ sở dữ liệu của bảng và phụ thuộc vào chính module. <br>
<br>
<b> Loại </ b> là loại có thể có được mối quan hệ giữa các module chính và các <b> module liên quan </ b>. <br>
<br>
Nhấp vào một tiêu đề cột để sắp xếp theo cột<br>
<br>
Nhấp vào một hàng trong các mối quan hệ bảng để xem và chỉnh sửa các thuộc tính gắn liền với mối quan hệ.<br>
<br>
Nhấp vào <b>Thêm mối quan hệ </ b> để tạo ra một mối quan hệ mới.',
		'addrelbtn'=>'Di chuột lên để thêm mối quan hệ..',
		'addRelationship'=>'<b>Quan hệ </ b> có thể được tạo ra giữa các phân hệ khác và tùy chỉnh module hoặc một module triển khai<br>
<br>
Được bày tỏ mối quan hệ trực quan thông qua subpanels và các lĩnh vực liên quan trong  hồ sơ module.<br>
<br>
Chọn một trong những mối quan hệ sau đây <b> Loại </ b> cho các module:<br>
<br>
<b>Một - Một </ b> - Cả hai module \sẽ chứa các trường hồ sơ liên quan.<br>
<br>
<b>	Một - Nhiều </ b> - Các module chính \ hồ sơ sẽ chứa một subpanel, và Module liên quan  \hồ sơ sẽ chứa một trường liên quan.<br>
<br>
<b>Nhiều - Nhiều </ b> - Cả hai module \hồ sơ sẽ hiển thị subpanels.<br>
<br>
Chọn <b>module liên quan</ b> cho các mối quan hệ. <br>
<br>
Nếu các loại hình liên quan đến mối quan hệ subpanels, chọn subpanel xem cho các Modul thích hợp.<br>
<br>
Nhấp vào<b>Lưu</ b> để tạo ra các mối quan hệ.',
	),
	'labelsHelp'=>array(
		'default'=> '<b> Nhãn </ b> cho các trường và các tiêu đề trong các Module có thể được thay đổi.<br>
<br>
Hiệu chỉnh các nhãn bằng cách nhấp chuột vào bên trong trường, nhập vào một nhãn mới và nhấp vào <b>Lưu</ b>.<br>
<br>
	
Nếu bất cứ ngôn ngữ nào được cài đặt trong gói ứng dụng, bạn có thể chọn <b> ngôn ngữ </ b> để sử dụng cho các nhãn.',
		'saveBtn'=>'Nhấp vào <b> Lưu </ b> để lưu tất cả các thay đổi',
		'publishBtn'=>'Nhấp vào <b>  Lưu & Triển khai </ b> để lưu tất cả các thay đổi và làm cho họ hoạt động.',
	),
	'portalSync'=>array(
	    'default' => 'Nhập các <b> Sugar Portal, URL </ b> của các cổng để cập nhật thông tin, và bấm vào <b>Go</ b>. <br</b>.<br>
<br>
Sau đó nhập đúng tên truy cập và mật khẩu và sau đó nhấp vào <b>Begin Sync</b>.<br>
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

'LBL_ADD_FIELDS'=>'Thêm một trườn tùy chỉnh',
'LBL_AVAILABLE_SUBPANELS'=>'Có sẵn Subpanels',
'LBL_ADVANCED'=>'Nâng cao',
'LBL_ADVANCED_SEARCH'=>'TÌm kiếm nâng cao',
'LBL_BASIC'=>'Cơ bản',
'LBL_BASIC_SEARCH'=>'Tìm kiếm cơ bản',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Currency',
'LBL_DASHLET'=>'Bảng điều khiển Sugar',
'LBL_DASHLETLISTVIEW'=>'Xem danh sách bảng điều khiển Sugar',
'LBL_DASHLETSEARCH'=>'Tìm kiếm bảng điều khiển Sugar',
'LBL_DASHLETSEARCHVIEW'=>'Tìm kiếm bảng điều khiển Sugar',
'LBL_DISPLAY_HTML'=>'Hiển thị mã HTML',
'LBL_DETAILVIEW'=>'Xem chi tiết',
'LBL_DROP_HERE' => '[Xóa ở đây]',
'LBL_EDIT'=>'Chỉnh sửa',
'LBL_EDIT_LAYOUT'=>'Chỉnh sửa bố trí',
'LBL_EDIT_ROWS'=>'Sửa đổi hàng',
'LBL_EDIT_COLUMNS'=>'Sửa đổi cột',
'LBL_EDIT_LABELS'=>'Sửa đổi nhãn',
'LBL_EDIT_FIELDS'=>'Tùy chỉnh trường',
'LBL_EDIT_PORTAL'=>'Chỉnh sửa cổng điện tử ',
'LBL_EDIT_FIELDS'=>'Chỉnh sửa trường',
'LBL_EDITVIEW'=>'Xem và sửa',
'LBL_FILLER'=>'(Bộ lọc)',
'LBL_FIELDS'=>'Trường',
'LBL_FAILED_TO_SAVE' => 'Không để lưu',
'LBL_FAILED_PUBLISHED' => 'Không thể xuất bản',
'LBL_HOMEPAGE_PREFIX' => 'Của cá nhân',
'LBL_LAYOUT_PREVIEW'=>'Xem bố cục',
'LBL_LAYOUTS'=>'Bố cục',
'LBL_LISTVIEW'=>'Xem danh sách',
'LBL_MODULES'=>'Modules',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Gói mới',
'LBL_NEW_PANEL'=>'Bảng mới',
'LBL_NEW_ROW'=>'Hàng mới',
'LBL_PACKAGE_DELETED'=>'Gói đã xóa',
'LBL_PUBLISHING' => 'Publishing ...',
'LBL_PUBLISHED' => 'Đã xuất bản',
'LBL_SELECT_FILE'=> 'Lựa chọn tập tin',
'LBL_SAVE_LAYOUT'=> 'Lưu bố cục',
'LBL_SELECT_A_SUBPANEL' => 'Lựa chọn một Subpanel',
'LBL_SELECT_SUBPANEL' => 'Lựa chọn Subpanel',
'LBL_SUBPANELS' => 'Subpanels',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SEARCH_FORMS' => 'Tìm kiếm',
'LBL_SEARCH'=>'Tìm kiếm',
'LBL_STAGING_AREA' => 'Staging Area (kéo thả các bản ghi ở đây)',
'LBL_SUGAR_FIELDS_STAGE' => 'Trường Sugar (Nhấp vào mục để thêm staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (Nhấp vào mục để thêm staging area)',
'LBL_TOOLBOX' => 'Hộp công cụ',
'LBL_VIEW_SUGAR_FIELDS' => 'Xem trường Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Xem Sugar Bin',
'LBL_QUICKCREATE' => 'Tạo nhanh',
'LBL_EDIT_DROPDOWNS' => 'Chỉnh sửa Global Dropdown',
'LBL_ADD_DROPDOWN' => 'Thêm Global Dropdown mới',
'LBL_BLANK' => '-blank-',
'LBL_TAB_ORDER' => 'Tab Order',

'LBL_DROPDOWN_TITLE_NAME' => 'Tên',
'LBL_DROPDOWN_LANGUAGE' => 'Ngôn ngữ',
'LBL_DROPDOWN_ITEMS' => 'Danh sách mục',
'LBL_DROPDOWN_ITEM_NAME' => 'Tên mục',
'LBL_DROPDOWN_ITEM_LABEL' => 'Hiện thị nhãn',

//RELATIONSHIPS
'LBL_MODULE' => 'Module',
'LBL_MODULE' => 'Module',
'LBL_LHS_MODULE'=>'Module chính',
'LBL_CUSTOM_RELATIONSHIPS' => '* Tạo ra mối quan hệ giữa Studio và Module Builder',
'LBL_RELATIONSHIPS'=>'Quan hệ',
'LBL_RELATIONSHIP_EDIT' => 'Chỉnh sửa mối quan hệ',
'LBL_REL_NAME' => 'Tên',
'LBL_REL_LABEL' => 'Nhãn',
'LBL_REL_TYPE' => 'Loại',
'LBL_RHS_MODULE'=>'Module liên quan',
'LBL_NO_RELS' => 'Không có quan hệ',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Điều kiện bắt buộc' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Cột',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Giá trị',
'LBL_SUBPANEL_FROM'=>'Subpanel từ',
'LBL_RELATIONSHIP_ONLY'=>'Không có thể nhìn thấy yếu tố có sẵn được tạo ra cho mối quan hệ này , hiện có thể nhìn thấy mối quan hệ giữa hai module.',
'LBL_ONETOONE' => 'Một - Một',
'LBL_ONETOMANY' => 'Một - Nhiều',
'LBL_MANYTOMANY' => 'Nhiều - Nhiều',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Lựa chọn một chức năng hoặc các thành phần.',
'LBL_QUESTION_MODULE1' => 'Lựa chọn một module.',
'LBL_QUESTION_EDIT' => 'Lựa chọn một module để chỉnh sửa.',
'LBL_QUESTION_LAYOUT' => 'Lựa chọn một layout để chỉnh sửa.',
'LBL_QUESTION_SUBPANEL' => 'Lựa chọn một subpanel để chỉnh sửa.',
'LBL_QUESTION_SEARCH' => 'Lựa chọn tìm kiếm bố cục để chỉnh sửa',
'LBL_QUESTION_MODULE' => 'Lựa chọn một thành phần của module để chỉnh sửa.',
'LBL_QUESTION_PACKAGE' => 'Chọn một gói phần mềm để chỉnh sửa, hoặc tạo ra một gói phần mềm mới.',
'LBL_QUESTION_EDITOR' => 'Lựa chọn một công cụ.',
'LBL_QUESTION_DROPDOWN' => 'Chọn một dropdown để chỉnh sửa, hoặc tạo một dropdown mới',
'LBL_QUESTION_DASHLET' => 'Chọn một dashlet layout để chỉnh sửa.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Liên quan',
'LBL_NAME'=>'Tên',
'LBL_LABELS'=>'Nhãn',
'LBL_MASS_UPDATE'=>'Update khối',
'LBL_AUDITED'=>'Kiểm toán',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Giá trị mặc định',
'LBL_REQUIRED'=>'Yêu cầu',
'LBL_DATA_TYPE'=>'Loại',
'LBL_HCUSTOM'=>'Lựa chọn',
'LBL_HDEFAULT'=>'Mặc định',
'LBL_LANGUAGE'=>'Ngôn ngữ:',


//SECTION
'LBL_SECTION_EDLABELS' => 'Chỉnh sửa nhãn',
'LBL_SECTION_PACKAGES' => 'Các gói',
'LBL_SECTION_PACKAGE' => 'Gói',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Cổng điện tử',
'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
'LBL_SECTION_PROPERTIES' => 'Những thuộc tính',
'LBL_SECTION_DROPDOWNED' => 'Chỉnh sửa Dropdown',
'LBL_SECTION_HELP' => 'Giúp đỡ',
'LBL_SECTION_ACTION' => 'Hành động',
'LBL_SECTION_MAIN' => 'Chính',
'LBL_SECTION_EDPANELLABEL' => 'Chỉnh sửa bảng nhãn',
'LBL_SECTION_FIELDEDITOR' => 'Chỉnh sửa trường',
'LBL_SECTION_DEPLOY' => 'Triển khai',
'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Mặc định',
'LBL_HIDDEN'=>'Ân',
'LBL_AVAILABLE'=>'Có sẵn',
'LBL_LISTVIEW_DESCRIPTION'=>'Hiện có ba cột hiển thị dưới đây. <b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong một danh sách xem theo mặc định. <b> Bổ sung </ b> cột chứa các lĩnh vực đó, một người sử dụng có thể chọn để sử dụng cho việc tạo một lần xem.  	
<b>Sănư có </ b> cột hiển thị các trường cho bạn như là một quản trị viên để thêm vào các cột mặc định hoặc bổ sung cho việc sử dụng của người dùng.',
'LBL_LISTVIEW_EDIT'=>'Xem danh sách biên soạn',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Xem trước',
'LBL_MB_RESTORE'=>'Khôi phục',
'LBL_MB_DELETE'=>'Xóa bỏ',
'LBL_MB_COMPARE'=>'Hoàn thành',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Thêm vào',
'LBL_BTN_SAVE'=>'Lưu ',
'LBL_BTN_SAVE_CHANGES'=>'Lưu giữ thay đổi',
'LBL_BTN_DONT_SAVE'=>'Hủy thay đổi',
'LBL_BTN_CANCEL'=>'Hủy bỏ',
'LBL_BTN_CLOSE'=>'Đóng',
'LBL_BTN_UPLOAD'=>'Tải lên',
'LBL_BTN_SAVEPUBLISH'=>'Lưu và triển khai',
'LBL_BTN_NEXT'=>'Tiếp theo',
'LBL_BTN_BACK'=>'Trở lại',
'LBL_BTN_CLONE'=>'Clone',
'LBL_BTN_ADDCOLS'=>'Thêm cộ',
'LBL_BTN_ADDROWS'=>'Thêm hàng',
'LBL_BTN_ADDFIELD'=>'Thêm trường',
'LBL_BTN_ADDDROPDOWN'=>'Thêm Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Sắp xếp tăng dần',
'LBL_BTN_SORT_DESCENDING'=>'Sắp xếp giảm dần',
'LBL_BTN_EDLABELS'=>'Chỉnh sửa nhãn',
'LBL_BTN_UNDO'=>'Hoàn tất',
'LBL_BTN_REDO'=>'Làm lại',
'LBL_BTN_ADDCUSTOMFIELD'=>'Thêm trường tùy chỉnh',
'LBL_BTN_EXPORT'=>'Tùy chỉnh xuất ra',
'LBL_BTN_DUPLICATE'=>'Trùng lặp',
'LBL_BTN_PUBLISH'=>'Xuất ra',
'LBL_BTN_DEPLOY'=>'Triển khai',
'LBL_BTN_EXP'=>'Xuất ra',
'LBL_BTN_DELETE'=>'Xóa bỏ',
'LBL_BTN_VIEW_LAYOUTS'=>'Xem Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Xem trường',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Xem mối quan hệ',
'LBL_BTN_ADD_RELATIONSHIP'=>'Thêm mối quan hệ',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Lỗi: luôn có một trường tồn tại',
'ERROR_INVALID_KEY_VALUE'=> "Lỗi:Mật khẩu không đúng [']",
'ERROR_NO_HISTORY' => 'Không tìm thấy nhật ký tập tin',





































//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Tên gói:',
'LBL_MODULE_NAME'=>'Tên Module:',
'LBL_AUTHOR'=>'Tác giả:',
'LBL_DESCRIPTION'=>'Mô tả:',
'LBL_KEY'=>'Khóa:',
'LBL_ADD_README'=>' Readme',
'LBL_MODULES'=>'Modules:',
'LBL_LAST_MODIFIED'=>'Chỉnh sửa lần cuối:',
'LBL_NEW_MODULE'=>'Module mới',
'LBL_LABEL'=>'Nhãn:',
'LBL_LABEL_TITLE'=>'Nhãn',
'LBL_WIDTH'=>'Chiều rộng',
'LBL_PACKAGE'=>'Gói:',
'LBL_TYPE'=>'Loại:',
'LBL_TEAM_SECURITY'=>'Đội bảo mật',
'LBL_ASSIGNABLE'=>'Trợ lý',
'LBL_PERSON'=>'Cá nhân',
'LBL_COMPANY'=>'Công ty',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Sale',
'LBL_FILE'=>'Tập tin',
'LBL_NAV_TAB'=>'Navigation Tab',
'LBL_CREATE'=>'Tạo ra',
'LBL_LIST'=>'Danh sách',
'LBL_LIST_VIEW'=>'Xem danh sách',
'LBL_HISTORY'=>'Xem lịch sử',
'LBL_ACTIVITIES'=>'Hoạt động',
'LBL_SEARCH'=>'Tìm kiếm',
'LBL_NEW'=>'Tin tức',
'LBL_TYPE_BASIC'=>'Cơ bản',
'LBL_TYPE_COMPANY'=>'Công ty',
'LBL_TYPE_PERSON'=>'Cá nhân',
'LBL_TYPE_ISSUE'=>'issue',
'LBL_TYPE_SALE'=>'sale',
'LBL_TYPE_FILE'=>'Tập tin',
'LBL_RSUB'=>'Đây là subpanel sẽ được xuất hiên trong module của cá nhân',
'LBL_MSUB'=>'This is the subpanel that your module provides to the related module for display',
'LBL_MB_IMPORTABLE'=>'Nhập vào',
'LBL_PACKAGE_WAS_DELETED'=>'[[Gói]] đã được xóa bỏ',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Tuỳ chỉnh xuất nhập ',
'LBL_EC_NAME'=>'Tên gói:',
'LBL_EC_AUTHOR'=>'Tác giả:',
'LBL_EC_DESCRIPTION'=>'Mô tả:',
'LBL_EC_KEY'=>'Khóa:',
'LBL_EC_CHECKERROR'=>'Hãy lựa chọn module.',
'LBL_EC_CUSTOMFIELD'=>'Chỉnh lý trường',
'LBL_EC_CUSTOMLAYOUT'=>'Chỉnh lý bố cục',
'LBL_EC_NOCUSTOM'=>'Không có module được chỉnh lý.',
'LBL_EC_EMPTYCUSTOM'=>'has empty customizations.',
'LBL_EC_EXPORTBTN'=>'Xuất ra',
'LBL_MODULE_DEPLOYED' => 'Module đã bị hủy.',
'LBL_UNDEFINED' => 'Không định nghĩa',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Dữ liệu nhận đã thất bại',
'LBL_AJAX_TIME_DEPENDENT' => 'Một thời gian phụ thuộc vào hành động trong tiến trình. Xin vui lòng chờ và thử lại trong một vài giây.',
'LBL_AJAX_LOADING' => 'Đang tải...',
'LBL_AJAX_DELETING' => 'Đang xóa...',
'LBL_AJAX_BUILDPROGRESS' => 'Xây dựng quá trình...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Hủy quá trình...',

//JS
'LBL_JS_REMOVE_PACKAGE' => 'Bạn có muốn xóa gói này? Điều này sẽ xoá vĩnh viễn tất cả các tập tin liên kết với các gói này.',

'LBL_DEPLOY_IN_PROGRESS' => 'Hủy bỏ gói',
'LBL_JS_VALIDATE_NAME'=>'Tên - Alphanumeric phải là không có dấu cách và bắt đầu với một văn bản',
'LBL_JS_VALIDATE_KEY'=>'Khóa - Alphanumeric phải là không có dấu cách và bắt đầu với một văn bản',
'LBL_JS_VALIDATE_LABEL'=>'Xin vui lòng nhập một nhãn sẽ được dùng như là hiển thị tên này dành cho module',
'LBL_JS_VALIDATE_TYPE'=>'Xin vui lòng chọn kiểu module bạn muốn xây dựng từ danh sách phía trên',
'LBL_JS_VALIDATE_REL_NAME'=>'Tên - Alphanumeric phải là không có dấu cách',
'LBL_JS_VALIDATE_REL_LABEL'=>'Nhãn - xin vui lòng thêm vào một nhãn mà sẽ được hiển thị ở phía trên của subpanel',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Xóa một lĩnh vực sẽ xóa tất cả các dữ liệu liên quan đến các lĩnh vực tùy chỉnh, và sẽ loại bỏ các lĩnh vực từ bất cứ bố trí bạn đã được thêm vào nó để',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Bạn có chăc muốn xóa mối quan hệ này?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Điều này sẽ làm cho mối quan hệ này luôn tồn tại. Bạn có chắc là bạn muốn triển khai mối quan hệ này?',
'LBL_CONFIRM_DONT_SAVE' => 'Thay đổi đã được thực hiện từ lần cuối, bạn đã lưu, Bạn muốn lưu?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Lưu thay đổi?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Chọn loại dữ liệu thích hợp dựa trên các kiểu dữ liệu mà sẽ được nhập vào trường.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Đúng</b>: Các lĩnh vực sẽ bao gồm trong khi nhập.<br>
<b>Không</b>:Các lĩnh vực sẽ không được bao gồm trong khi nhập .<br>
<b>Yêu cầu</b>: Một giá trị cho các lĩnh vực cần phải được cung cấp trong khi nhập.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Kích hoạt</b>:Các lĩnh vực sẽ xuất hiện trong hợp nhất bản Sao tính năng, nhưng sẽ không có sẵn để sử dụng cho các bộ lọc điều kiện trong các tính năng tìm bản Sao.<br>
<b>Không kích hoạt</b>: Các lĩnh vực sẽ không xuất hiện trong bản Sao hợp nhất các tính năng, và sẽ không có sẵn để sử dụng cho các bộ lọc điều kiện trong các tính năng tìm bản Sao.'



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