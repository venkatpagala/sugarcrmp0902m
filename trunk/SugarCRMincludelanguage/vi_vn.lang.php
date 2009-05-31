<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
  * SugarCRM là một chương trình quản lý quan hệ khách hàng được phát triển bởi 
  SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
  * Đây là một phần mềm miễn phí; bạn có thể phân phối lại cũng như chỉnh sửa phần
  mềm dưới sự cho phép của luật bản quyền phần mềm mã nguồn mở GNU phiên bản 3 do 
  Free Software Foundation xuất bản. Ngoài những điều khoản trong mục 15 điều 7a là 
  các điều kiện sau: BẤT CỨ PHẦN NÀO ĐƯỢC SAO CHÉP LẠI ĐỀU THUỘC BẢN QUYỀN DUY NHẤT 
  CỦA SUGARCRM, SUGARCRM TỪ CHỐI BẢO HÀNH VỀ TÍNH VI PHẠM BẢN QUYỀN CỦA BÊN THỨ 3.
  * Phần mềm được phân phối với mong muốn nó sẽ hữu dụng với mọi người, và phần mềm
  cũng không có bất kì sự bảo hành nào nếu phần mềm không bán được và không phù hợp 
  với công việc của người sử dụng. Để biết thêm chi tiết hãy đọc luật bản quyền GNU 
  dành cho phần mềm mã nguồn mở để biết thêm chi tiết.
  * Bạn nên có một bản về luật bản quyền dành cho phần mềm mã nguồn mở GNU. Nếu chưa 
  biết bạn có thể ghé thăm trang web http://www.gnu.org/licenses hoặc gửi thư đến Free Software 
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301 USA.
  * Các bạn có thể liên hệ SugarCRM, Inc. trụ sở chính tại 10050 North Wolfe Road,
  SW2-130, Cupertino, CA 95014, USA. Hoặc gửi thư điện tử đến địa chỉ contact@sugarcrm.com.
  Các thành viên tham gia việc chỉnh sửa và tác động vào mã nguồn của các phiên bản của 
  sản phẩm cần ghi rõ các thông báo hợp pháp phù hợp với Điều 5 đã ghi trong luật bản 
  quyền dành cho mã nguồn mở phiên bản 3.

  * Nhu trong diều 7(b) của bộ luật dành cho phần mềm mã nguồn mở GNU phiên bản 3,
  Nhưng thông báo hợp pháp phải ghi rõ logo: "Powered by SugarCRM". Trong trường hợp
  logo không phù hợp bởi lý do công nghệ thì phải ghi rõ bằng chữ "Powered by SugarCRM".

 ********************************************************************************/
/*********************************************************************************

 * Miêu tả: Chỉ định gói ngôn ngữ Tiếng Việt Nam cho ứng dụng nền.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'VI_VN',
  'moduleList' =>
  array (
    'Home' => 'Trang chủ',
    'Dashboard' => 'Biểu đồ',
    'Contacts' => 'Liên hệ',
    'Accounts' => 'Tài Khoản',
    'Opportunities' => 'Cơ hội',
    'Cases' => 'Giải pháp',
    'Notes' => 'Chú ý',
    'Calls' => 'Cuộc gọi',
    'Emails' => 'Thư điện tử',
    'Meetings' => 'Cuộc họp',
    'Tasks' => 'Tác vụ',
    'Calendar' => 'Lịch',
    'Leads' => 'Tiềm năng',
    'Currencies' => 'Tiền tệ',















    'Activities' => 'Hoạt dộng',
    'Bugs' => 'Bộ dò lỗi',
    'Feeds' => 'RSS',
    'iFrames'=>'Cổng diện tử',
    'TimePeriods'=>'Giai đoạn',
    'Project'=>'Dự án',
    'ProjectTask'=>'Hoạt động của dự án',
    'Campaigns'=>'Chiến dịch',
    'CampaignLog'=>'Bản ghi chiến dịch',
    'Documents'=>'Tài liệu',
    'Sync'=>'Ðồng bộ',






    'Users' => 'Người dùng',
    'Releases' => 'Công bố',
    'Prospects' => 'Mục tiêu',
    'Queues' => 'Danh sách đợi',
    'EmailMarketing' => 'Thư tiếp thị',
    'EmailTemplates' => 'Thư mẫu',
    'ProspectLists' => 'Danh sách mục tiêu',
    'SavedSearch' => 'Tìm kiếm đã lưu',
    'Trackers' => 'Bộ dò',
    'TrackerPerfs' => 'Thực thi bộ dò',
    'TrackerSessions' => 'Phiên bộ dò',
    'TrackerQueries' => 'Truy vấn bộ dò',
    'FAQ' => 'Những câu hỏi thường gặp',
    'Newsletters' => 'Thư mới',
    'SugarFeed'=>'Sugar Feed',








        ),
  'moduleListSingular' =>
  array (
    'Home' => 'Trang chủ',
    'Dashboard' => 'Biểu đồ',
    'Contacts' => 'Liên hệ',
    'Accounts' => 'Tài khoản',
    'Opportunities' => 'Cơ hội',
    'Cases' => 'Trường hợp',
    'Notes' => 'Ghi chú',
    'Calls' => 'Cuộc gọi',
    'Emails' => 'Thư điện tử',
    'Meetings' => 'Cuộc họp',
    'Tasks' => 'Tác vụ',
    'Calendar' => 'Lịch',
    'Leads' => 'Mối quan hệ',









    'Activities' => 'Hoạt động',
    'Bugs' => 'Bộ dò lỗi',
    'Feeds' => 'RSS',
    'iFrames'=>'Cổng điện tử',
    'TimePeriods'=>'Kì hoạt động',
    'Project'=>'Dự án',
    'ProjectTask'=>'Hoạt động dự án',
    'Campaigns'=>'Chiến dịch',
    'Documents'=>'Tài liệu',
    'Sync'=>'Ðồng bộ',






    'Users' => 'Người sử dụng'
        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Có',
    '2'=>'Không',
  ),

  //e.g. en fran?ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Phân tích',
    'Competitor' => 'So sánh',
    'Customer' => 'Khách hàng',
    'Integrator' => 'Hợp nhất viên',
    'Investor' => 'Người đầu tư',
    'Partner' => 'Ðối tác',
    'Press' => 'Nhà xuất bản',
    'Prospect' => 'Khách hàng tiềm năng',
    'Reseller' => 'Ðại lí',
    'Other' => 'Khác',
  ),
  //e.g. en espa?ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Dệt may',
    'Banking' => 'Ngân hàng',
    'Biotechnology' => 'Công nghệ sinh học',
    'Chemicals' => 'Hóa học',
    'Communications' => 'Truyền thông',
    'Construction' => 'Xây dựng',
    'Consulting' => 'Tư vấn',
    'Education' => 'Giáo dục',
    'Electronics' => 'Ðiện tử',
    'Energy' => 'Năng lượng',
    'Engineering' => 'Cơ khí',
    'Entertainment' => 'Giải trí',
    'Environmental' => 'Môi trường',
    'Finance' => 'Tài chính',
    'Government' => 'Chính phủ',
    'Healthcare' => 'Chăm sóc sức khỏe',
    'Hospitality' => 'Kinh doanh nhà nghỉ',
    'Insurance' => 'Bảo hiểm',
    'Machinery' => 'Chế tạo máy',
    'Manufacturing' => 'Nhà sản xuất',
    'Media' => 'Truyền thông đại chúng',
    'Not For Profit' => 'Phi lợi nhuận',
    'Recreation' => 'Thư giãn',
    'Retail' => 'Bán lẻ',
    'Shipping' => 'Vận chuyển',
    'Technology' => 'Công nghệ',
    'Telecommunications' => 'Viễn thông',
    'Transportation' => 'Vận tải',
    'Utilities' => 'Tiện ích',
    'Other' => 'Khác',
  ),
  'lead_source_default_key' => 'Người dùng tự tạo',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Mời chào',
    'Existing Customer' => 'Khách hàng cũ',
    'Self Generated' => 'Tự tạo',
    'Employee' => 'Nhân viên',
    'Partner' => 'Ðối tác',
    'Public Relations' => 'Quan hệ công chúng',
    'Direct Mail' => 'Thư trực tiếp',
    'Conference' => 'Hội thảo',
    'Trade Show' => 'Triển lãm thương mại',
    'Web Site' => 'Trang web',
    'Word of mouth' => 'Truyền miệng',
    'Email' => 'Thư diện tử',
    'Campaign'=>'Chiến dịch',
    'Other' => 'Khác',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Công việc đã có',
    'New Business' => 'Công việc mới',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Doanh thu',
    'Investment'=>'Ðầu tư',
    'Expected_Revenue'=>'Doanh thu kỳ vọng',
    'Budget'=>'Ngân sách',

  ),
  //Chú ý:  Không dịcch opportunity_relationship_type_default_key
//       dây là khóa cho giá trị mặc định của opportunity_relationship_type_dom
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Người ra quyết định chính',
    'Business Decision Maker' => 'Người ra quyết định kinh doanh',
    'Business Evaluator' => 'Người đánh giá giá kinh doanh',
    'Technical Decision Maker' => 'Người ra quyết định kỹ thuật',
    'Technical Evaluator' => 'Người đánh giá kỹ thuật',
    'Executive Sponsor' => 'Nhà tài trợ chính',
    'Influencer' => 'Điều phối viên',
    'Other' => 'Khác',
  ),
  //Chú ý:  Không dịch case_relationship_type_default_key
//       dây là khóa cho giá trị mặc định của case_relationship_type_dom
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Liên lạc chính',
    'Alternate Contact' => 'Liên lạc phụ',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => 'Vòng 15',
    'Net 30' => 'Vòng 30',
  ),
  'sales_stage_default_key' => 'Triển vọng',
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Triển vọng',
    'Qualification' => 'Khả năng',
    'Needs Analysis' => 'Phân tích nhu cầu',
    'Value Proposition' => 'Nhận định giá trị',
    'Id. Decision Makers' => 'Người tạo mã quyết định',
    'Perception Analysis' => 'Phân tích doanh thu',
    'Proposal/Price Quote' => 'Ðặt hàng/Báo giá',
    'Negotiation/Review' => 'Ðàm phán/Xem xét',
    'Closed Won' => 'Lợi nhuận',
    'Closed Lost' => 'Thua lỗ',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Bản thảo',
    'Negotiation' => 'Ðàm phán',
    'Delivered' => 'Gọi',
    'On Hold' => 'Ðợi phản hồi',
    'Confirmed' => 'Xác nhận',	
    'Closed Accepted' => 'Được chấp nhận',
    'Closed Lost' => 'Không được chấp nhận',
    'Closed Dead' => 'Hủy bỏ',
  ),
  'sales_probability_dom' => // Các khóa c?n gi?ng nhu sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Gọi',
    'Meeting' => 'Cuộc họp',
    'Task' => 'Tác vụ',
    'Email' => 'Thư điện tử',
    'Note' => 'Ghi chú',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Ông',
        'Ms.' => 'Cô',
        'Mrs.' => 'Bà',
        'Dr.' => 'Tiến sĩ',
        'Prof.' => 'Giáo sư',
      ),
  //Thời gian được tính theo giây; Số càng lớn thời gian càng lâu;
  'reminder_max_time'=>3600,
  'reminder_time_options' => array( 60=> '1 Phút',
                                  300=> '5 Phút',
                                  600=> '10 Phút',
                                  900=> '15 Phút',
                                  1800=> '30 Phút',
                                  3600=> '1 tiếng',
                                 ),

  'task_priority_default' => 'Trung bình',
  'task_priority_dom' =>
  array (
    'High' => 'Cao',
    'Medium' => 'Trung bình',
    'Low' => 'Thấp',
  ),
  'task_status_default' => 'Chưa bắt đầu',
  'task_status_dom' =>
  array (
    'Not Started' => 'Chưa bắt đầu',
    'In Progress' => 'Đang thực hiện',
    'Completed' => 'Két thúc',
    'Pending Input' => 'Tạm hoãn',
    'Deferred' => 'Trả chậm',
  ),
  'meeting_status_default' => 'Lên kế hoạch',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Lên kế họach',
    'Held' => 'Tổ chức',
    'Not Held' => 'Không tổ chức',
  ),
  'call_status_default' => 'Lên kế hoạch',
  'call_status_dom' =>
  array (
    'Planned' => 'Lên kế hoạch',
    'Held' => 'Tổ chức',
    'Not Held' => 'Không tổ chức',
  ),
  'call_direction_default' => 'Gọi đi',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Gọi trong nước',
    'Outbound' => 'Gọi quốc tế',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Mới',
    'Assigned' => 'Quen biết',
    'In Process' => 'Ðang tiến triển',
    'Converted' => 'Thân thiết',
    'Recycled' => 'Quan hệ cũ',
    'Dead' => 'Chấm dứt',
  ),
   'gender_list' =>
  array (
    'male' => 'Nam',
    'female' => 'Nữ',
  ),
  //Chú ý:  không d?ch case_status_default_key
//       dây là khóa cho giá tr? m?c d?nh case_status_dom
  'case_status_default_key' => 'New',
  'case_status_dom' =>
  array (
    'New' => 'Mới',
    'Assigned' => 'Ðang xử lý',
    'Closed' => 'Kết thúc',
    'Pending Input' => 'Tạm hoãn',
    'Rejected' => 'Từ chối',
    'Duplicate' => 'Trùng lặp',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Cao',
    'P2' => 'Trung bình',
    'P3' => 'Thấp',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Ðang kích hoạt',
    'Inactive' => 'Không kích hoạt',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Bình thường',
    'Terminated' => 'Ðuổi việc',
    'Leave of Absence' => 'Thời gian nghỉ có phép',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),

    'project_task_priority_options' => array (
        'High' => 'Cao',
        'Medium' => 'Trung bình',
        'Low' => 'Thấp',
    ),
    'project_task_priority_default' => 'Trung bình',

    'project_task_status_options' => array (
        'Not Started' => 'Chưa băt đầu',
        'In Progress' => 'Ðang tiến hành',
        'Completed' => 'Kết thúc',
        'Pending Input' => 'Trì hoãn',
        'Deferred' => 'Trả chậm',
    ),
    'project_task_utilization_options' => array (
        '0' => '0',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Nháp',
        'In Review' => 'Ðang xem xét',
        'Published' => 'Xuất bản',
    ),
    'project_status_default' => 'Nháp',

    'project_duration_units_dom' => array (
        'Days' => 'Ngày',
        'Hours' => 'Giờ',
    ),

    'project_priority_options' => array (
        'High' => 'Cao',
        'Medium' => 'Trung bình',
        'Low' => 'Thấp',
    ),
    'project_priority_default' => 'Trung bình',

  //Chú ý:  không d?ch record_type_default_key
//       dây là khóa cho giá tr? m?c d?nh default record_type_module
  'record_type_default_key' => 'Accounts',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Tài khoản',
    'Opportunities' => 'Cơ hội',
    'Cases' => 'Giải pháp',
    'Leads' => 'Mối quan hệ',
    'Contacts' => 'Liên lạc', // cn (11/22/2005) added to support Emails




    'Bugs' => 'Lỗi',
    'Project' => 'Dự án',



    'ProjectTask' => 'Hoạt động dự án',
    'Tasks' => 'Tác vụ',
    'Prospects' => 'Mục tiêu',
  ),

  'record_type_display_notes' =>
  array (

    'Accounts' => 'Tài khoản',
    'Contacts' => 'Liên hệ',
    'Opportunities' => 'Cơ hội',
    'Cases' => 'Giải pháp',
    'Leads' => 'Mối quan hệ',






    'Bugs' => 'Lỗi',
    'Emails' => 'Thư điện tử',
    'Project' => 'Dự án',
    'ProjectTask' => 'Hoạt động dự án',
    'Meetings' => 'Họp',
    'Calls' => 'Gọi',








  ),

  'parent_type_display' =>
  array (

    'Accounts' => 'Tài khoản',
    'Bugs' => 'Bộ dò lỗi',
    'Cases' => 'Giải pháp',
    'Contacts' => 'Liên lạc',
    'Leads' => 'Mối quan hệ',
    'Opportunities' => 'Cơ hội',



    'Project' => 'Dự án',
    'ProjectTask' => 'Hoạt động dự án',
    'Prospects' => 'Mục tiêu',



    'Tasks' => 'Tác vụ',








  ),







































  'quote_type_dom' =>
  array (
    'Quotes' => 'Báo giá',
    'Orders' => 'Đặt hàng',
  ),
  'default_quote_stage_key' => 'Bản thảo',
  'quote_stage_dom' =>
  array (
    'Draft' => 'Bản thảo',
    'Negotiation' => 'Ðàm phán',
    'Delivered' => 'Ðã gửi',
    'On Hold' => 'Đợi phản hồi',
    'Confirmed' => 'Xác nhận',
    'Closed Accepted' => 'Được chấp nhận',
    'Closed Lost' => 'Không được chấp nhận',
    'Closed Dead' => 'Hủy bỏ',
  ),
  'default_order_stage_key' => 'Chờ xác nhận',
  'order_stage_dom' =>
  array (
    'Pending' => 'Chờ xác nhận',
    'Confirmed' => 'Xác nhận',
    'On Hold' => 'Chờ phản hồi',
    'Shipped' => 'Chuyển hàng',
    'Cancelled' => 'Huỷ bỏ',
  ),

//Note:  Không d?ch quote_relationship_type_default_key
//       dây là khóa cho giá tr? m?c d?nh c?a quote_relationship_type_dom 
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Người quyết định kinh doanh chính',
    'Business Decision Maker' => 'Người quyết định kinh doanh',
    'Business Evaluator' => 'Ngừơi giám sát kinh doanh',
    'Technical Decision Maker' => 'Người quản lý kỹ thuật',
    'Technical Evaluator' => 'Người gián sát kỹ thuật',
    'Executive Sponsor' => 'Nhà tài trợ chính',
    'Influencer' => 'Ðiều phối viên',
    'Other' => 'Khác',
  ),
  'layouts_dom' =>
  array (
    'Standard' => 'Ðề xuất tiêu chuẩn',
    'Invoice' => 'Hóa đơn',
    'Terms' => 'Ðiều khoản thanh toán'
  ),

  'issue_priority_default_key' => 'Trung bình',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Gấp',
    'High' => 'Cao',
    'Medium' => 'Bình thường',
    'Low' => 'Thấp',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Chấp nhận',
    'Duplicate' => 'Trùng lặp',
    'Closed' => 'Kết thúc',
    'Out of Date' => 'Quá hạn',
    'Invalid' => 'Không hợp lệ',
  ),

  'issue_status_default_key' => 'Mới',
  'issue_status_dom' =>
  array (
    'New' => 'Mới',
    'Assigned' => 'Phân công',
    'Closed' => 'Kết thúc',
    'Pending' => 'Tạm hoãn',
    'Rejected' => 'Từ chối',
  ),

  'bug_priority_default_key' => 'Trung bình',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Khẩn cấp',
    'High' => 'Cao',
    'Medium' => 'Bình thường',
    'Low' => 'Thấp',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Chấp nhận',
    'Duplicate' => 'Trùng lặp',
    'Fixed' => 'Đã sửa',
    'Out of Date' => 'Quá hạn',
    'Invalid' => 'Không hợp lệ',
    'Later' => 'Giải quyết sau',
  ),
  'bug_status_default_key' => 'Mới',
  'bug_status_dom' =>
  array (
    'New' => 'Mới',
    'Assigned' => 'Phân công',
    'Closed' => 'Kết thúc',
    'Pending' => 'Tạm hoãn',
    'Rejected' => 'Từ chối',
  ),
   'bug_type_default_key' => 'Lỗi',
  'bug_type_dom' =>
  array (
    'Defect' => 'Thiếu sót',
    'Feature' => 'Chức năng',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Quản trị',
    'Product' => 'Sản phẩm',
    'User' => 'Người dùng',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Nội bộ',
    'Forum' => 'Diễn đàn',
    'Web' => 'Trang web',
    'InboundEmail' => 'Thư điện tử'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Tài khoản',
    'Activities' => 'Hoạt động',
    'Bug Tracker' => 'Bộ dò lỗi',
    'Calendar' => 'Lịch',
    'Calls' => 'Cuộc gọi',
    'Campaigns' => 'Chiến dịch',
    'Cases' => 'Giải pháp',
    'Contacts' => 'Liên lạc',
    'Currencies' => 'Tiền tệ',
    'Dashboard' => 'Biểu đồ',
    'Documents' => 'Tài liệu',
    'Emails' => 'Thư điện tử',
    'Feeds' => 'Phản hồi',
    'Forecasts' => 'Dự báo',
    'Help' => 'Giúp đỡ',
    'Home' => 'Trang chủ',
    'Leads' => 'Tiềm năng',
    'Meetings' => 'Họp',
    'Notes' => 'Ghi chú',
    'Opportunities' => 'Cơ hội',
    'Outlook Plugin' => 'Tích hợp Outlook',
    'Product Catalog' => 'Danh mục sản phẩm',
    'Products' => 'Sản phẩm',
    'Projects' => 'Dự án',
    'Quotes' => 'Báo giá',
    'Releases' => 'Phát hành',
    'RSS' => 'RSS',
    'Studio' => 'Trình bày',
    'Upgrade' => 'Nâng cấp',
    'Users' => 'Người dùng',
  ),

  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Lên kế hoạch',
        'Active' => 'Đang thực hiện',
        'Inactive' => 'Hoãn Thực hiện',
        'Complete' => 'Kết thúc',
        'In Queue' => 'Chưa thẩm định',
        'Sending'=> 'Đang gửi',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Bán hàng từ xa',
        'Mail' => 'Thư',
        'Email' => 'Thư điện tử',
        'Print' => 'In ấn',
        'Web' => 'Trang web',
        'Radio' => 'Phát thanh',
        'Television' => 'Truyền hình',
        'NewsLetter' => 'Thư thông báo',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Hàng tuần',
        'Monthly' => 'Hàng tháng',
        'Quarterly' => 'Hàng quý',
        'Annually' => 'Thường niên',
        ),
        
  'notifymail_sendtype' =>
  array (


    'sendmail' => 'sendmail',


    'SMTP' => 'SMTP',
  ),
  'dom_timezones' => array('-12'=>'(GMT - 12) International Date Line West',
                            '-11'=>'(GMT - 11) Midway Island, Samoa',
                            '-10'=>'(GMT - 10) Hawaii',
                            '-9'=>'(GMT - 9) Alaska',
                            '-8'=>'(GMT - 8) San Francisco',
                            '-7'=>'(GMT - 7) Phoenix',
                            '-6'=>'(GMT - 6) Saskatchewan',
                            '-5'=>'(GMT - 5) New York',
                            '-4'=>'(GMT - 4) Santiago',
                            '-3'=>'(GMT - 3) Buenos Aires',
                            '-2'=>'(GMT - 2) Mid-Atlantic',
                            '-1'=>'(GMT - 1) Azores',
                            '0'=>'(GMT)',
                            '1'=>'(GMT + 1) Madrid',
                            '2'=>'(GMT + 2) Athens',
                            '3'=>'(GMT + 3) Moscow',
                            '4'=>'(GMT + 4) Kabul',
                            '5'=>'(GMT + 5) Ekaterinburg',
                            '6'=>'(GMT + 6) Astana',
                            '7'=>'(GMT + 7) Bangkok',
                            '8'=>'(GMT + 8) Perth',
                            '9'=>'(GMT + 9) Seol',
                            '10'=>'(GMT + 10) Brisbane',
                            '11'=>'(GMT + 11) Solomone Is.',
                            '12'=>'(GMT + 12) Auckland',
                            ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"Tháng một",
                '2'=>"Tháng hai",
                '3'=>"Tháng ba",
                '4'=>"Tháng tư",
                '5'=>"Tháng năm",
                '6'=>"Tháng sáu",
                '7'=>"Tháng bảy",
                '8'=>"Tháng tám",
                '9'=>"Tháng chín",
                '10'=>"Tháng mười",
                '11'=>"Tháng mười một",
                '12'=>"Tháng mười hai",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"01",
                '2'=>"02",
                '3'=>"03",
                '4'=>"04",
                '5'=>"05",
                '6'=>"06",
                '7'=>"07",
                '8'=>"08",
                '9'=>"09",
                '10'=>"10",
                '11'=>"11",
                '12'=>"12",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Chủ nhật",
                '2'=>"Thứ hai",
                '3'=>"Thứ ba",
                '4'=>"Thứ tư",
                '5'=>"Thứ năm",
                '6'=>"Thứ sáu",
                '7'=>"Thứ bảy",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"CN",
                '2'=>"T2",
                '3'=>"T3",
                '4'=>"T4",
                '5'=>"T5",
                '6'=>"T6",
                '7'=>"T7",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"sáng",
                'pm'=>"chiều"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'SÁNG',
                 'PM'=>'CHIỀU'
        ),
    'dom_report_types'=>array(
                'tabular'=>'Hàng và cột',
                'summary'=>'Tổng kết',
                'detailed_summary'=>'Tổng kết chi tiết',
                'Matrix' => 'Matrix',
        ),
    'dom_email_types'=> array(
        'out'       => 'Gửi',
        'archived'  => 'Lưu trữ',
        'draft'     => 'Bản thảo',
        'inbound'   => 'Nội bộ',
        'campaign'  => 'Chiến dịch'
    ),
    'dom_email_status' => array (
        'archived'  => 'Lưu trữ',
        'closed'    => 'Đóng',
        'draft'     => 'Bản thảo',
        'read'      => 'Đọc',
        'replied'   => 'Đã trả lời',
        'sent'      => 'Đã gửi',
        'send_error'=> 'Thông báo lỗi',
        'unread'    => 'Chưa đọc',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Lưu trữ',
    ),

    'dom_email_server_type' => array(   ''          => '--None--',
                                        'imap'      => 'IMAP',
                                        'pop3'      => 'POP3',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--Mặc định--',
                                     'createcase'  => 'Tạo giải pháp',
                                     'bounce'   => 'Bounce Handling',
    ),
    'dom_email_distribution'=> array(''             => '--Mặc định--',
                                     'direct'       => 'Liên quan trực tiếp',
                                     'roundRobin'   => 'Vòng-Robin',
                                     'leastBusy'    => 'Tối thiểu-Bận',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Vòng-Robin',
                                                     'leastBusy'    => 'Tối thiểu-Bận',
    ),
    'dom_email_errors'      => array(1 => 'Chỉ chọn một trong những người sử dụng khi bản ghi trực tiếp giao việc.',
                                     2 => 'Bạn phải chỉ định Chỉ Mục khi kiểm tra bản ghi trực tiếp giao việc.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Đúng',
                                     'bool_false' => 'Sai',
    ),
    'dom_int_bool'          => array(1 => 'Yes',
                                     0 => 'No',
    ),
    'dom_switch_bool'       => array ('on' => 'Yes',
                                        'off' => 'No',
                                        '' => 'No', ),
    'dom_email_link_type'   => array(   ''          => 'Mặc định hệ thống thư Khách hàng',
                                        'sugar'     => 'Khách hàng của SugarCRM Thư',
                                        'mailto'    => 'External Mail Client'),

    'dom_email_editor_option'=> array(  ''          => 'Định dạng thư mặc định',
                                        'html'      => 'Thư HTML',
                                        'plain'     => 'Thư điện tử Plain Text'),


    'schedulers_times_dom'  => array(   'not run'       => 'Lỗi khi đang chạy, Không được thực thi',
                                        'ready'         => 'Sẵn sàng',
                                        'in progress'   => 'Đang xử lý',
                                        'failed'        => 'Thất bại',
                                        'completed'     => 'Hoàn thành',
                                        'no curl'       => 'Không chạy: Không có cURL',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Đang thực hiện',
        'Inactive' => 'Chưa thực hiện',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Phút',
        'hour' => 'Giờ',
        ),

    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Đang thực hiện',
    'Inactive' => 'Chưa thực hiện',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Trực tiếp',
    'Rollup' => 'Cuộn lên',
  ),

    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Tiếp thị',
    'Knowledege Base' => 'Kiến thức nền',
    'Sales' => 'Bán hàng',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Hỗ trợ Tiếp thị',
    'Product Brochures' => 'Thông tin tóm tắt sản phẩm',
    'FAQ' => 'Câu hỏi thường gặp',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Hoạt động',
    'Draft' => 'Bản thảo',
    'FAQ' => 'Câu hỏi thường gặp',
    'Expired' => 'Hết hạn',
    'Under Review' => 'Đang xem xét',
    'Pending' => 'Tạm hoãn',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Kết hợp thư',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'Giấy phép đồng ý',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Chấp nhận',
    'decline' => 'Từ chối',
    'tentative' => 'Đang sắp xếp',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Chấp nhận',
    'decline' => 'Từ chối',
    'tentative' => 'Đang sắp xếp',
    'none'      => 'Không có',
  ),





















































































































































































































































































































































































































    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45'),


// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',



    'Mailbox' => 'Hòm thư',
),
*/

//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Mặc định',
    'seed' => 'Seed',
    'exempt_domain' => 'Suppression List - By Domain',
    'exempt_address' => 'Suppression List - By Email Address',
    'exempt' => 'Suppression List - By Id',
    'test' => 'Kiểm tra',
  ),

  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'Hoạt động',
    'inactive'=>'Chưa hoạt động'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Thư đã gửi/Đã thử',
    'send error'=>'Thư phát sinh,Khác',
    'invalid email'=>'Thư phát sinh,Thư không hợp lệ',
    'link'=>'Click vào đường dẫn',
    'viewed'=>'Thư đã xem',
    'removed'=>'Opted Out',
    'lead'=>'Tạo mới tiềm năng',
    'contact'=>'Tạo liên hệ',
    'blocked'=>'Ngăn theo địa chỉ và tên miền',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Liên lạc',
    'Users'=>'Người dùng',
    'Prospects'=>'Mục tiêu',
    'Leads'=>'Tiềm năng',
  ),

  'merge_operators_dom' => array (
    'like'=>'Bao gồm',
    'exact'=>'Chính xác',
    'start'=>'Bắt đầu với',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Đúng',
    'false'=>'Sai',
    'required'=>'Yêu cầu',
  ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Dừng chức năng',
        1=>'Chạy chức năng',





  ),

  'navigation_paradigms' => array(
        'm'=>'Mô-đun',
        'gm'=>'Nhóm mô-đun',
  ),











































    'projects_priority_options' => array (
        'high'      => 'Cao',
        'medium'    => 'Bình thường',
        'low'       => 'Thấp',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Chưa khởi động',
        'inprogress'    => 'Đang xử lý',
        'completed'     => 'Hoàn thành',
    ),

    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Mở rộng ghi chú',
        'collapselegend'    => 'Thu hẹp ghi chú',
        'clickfordrilldown' => 'Ấn để Drill down',
        'drilldownoptions'  => 'Drill Down Options',
        'detailview'        => 'Chi tiết...',
        'piechart'          => 'Biếu đồ tròn',
        'groupchart'        => 'Biểu đồ nhóm',
        'stackedchart'      => 'Biểu đồ chồng',
        'barchart'			=> 'Biểu đồ thanh',
        'horizontalbarchart'   => 'Biểu đồ thanh ngang',
        'linechart'         => 'Biểu đồ đường',
        'noData'            => 'Không có dữ liệu',
        'print'				=> 'In ra',
        'pieWedgeName'      => 'Mục',
    ),











































































































    'release_status_dom' =>
    array (
        'Active' => 'Hoạt động',
        'Inactive' => 'Không hoạt động',
    ),
);

$app_strings = array (
    'LBL_SORT'                              => 'Phân loại',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Thêm server...',

    'LBL_ROUTING_ADD_RULE'                  => 'Thêm thói quen',
    'LBL_ROUTING_ALL'                       => 'Tất cả',
    'LBL_ROUTING_ANY'                       => 'Bất kỳ',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Thôi',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Lưu thói quen',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Sao chép thư',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Xóa đối tượng Sugar',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Xóa tập tin',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Xóa thư',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Chuyển tiếp thư',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Đánh dấu thư',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Đánh dấu đã đọc',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Đánh dấu chưa đọc',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Chuyển thư',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Thực hiện theo các bước sau',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Trả lời vào hòm thư',

    'LBL_ROUTING_CHECK_RULE'                => "Có một lỗi được phát hiện:\n",
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Xin hãy kiểm tra lại các trường đã được đánh dấu.',
    'LBL_ROUTING_CONFIRM_DELETE'            => "Bạn có chắc là muốn xóa thói quen này?\n Không thể không thực hiện.",

    'LBL_ROUTING_FLAGGED'                   => 'Đặt đánh dấu',
    'LBL_ROUTING_FORM_DESC'                 => 'Thói quen đã lưu sẽ được thực hiện ngay.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Thói quen',
    'LBL_ROUTING_MATCH'                     => 'Nếu',
    'LBL_ROUTING_MATCH_2'                   => 'Của các điều kiện sau đây được đáp ứng:',

    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Nội dung chính',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'Từ',
    'LBL_ROUTING_MATCH_NAME'                => 'Chủ đề',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'Quyền ưu tiên cao',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Quyền ưu tiên trung bình',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Quyền ưu tiên thấp',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'Tới',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Nội dung',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Không có nội dung',

    'LBL_ROUTING_NAME'                      => 'Tên thói quen',
    'LBL_ROUTING_NEW_NAME'                  => 'Thói quen mới',
    'LBL_ROUTING_ONE_MOMENT'                => 'Xin đợi một lát...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Nguyên bản bài viết sau.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Đang lưu thói quen',
    'LBL_ROUTING_SUB_DESC'                  => 'Thói quen được chọn đang hoạt động. Chọn vào tên để chỉnh sửa.',
    'LBL_ROUTING_TO'                        => 'Tới',
    'LBL_ROUTING_TO_ADDRESS'                => 'Tới địa chỉ',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'Với mẫu',

	'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Bạn đã có thông tin về số điện thoại và địa chỉ. Để thay đổi số điện thoại và địa chỉ cũ bằng số điện thoại và địa chỉ mới, hãy ấn "OK". Để giữ thông tin cũ ấn "Cancel"',

    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Chỉnh sửa',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Mặc định Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Tên',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Máy chủ hòm thư ở ngoài',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Tác nhân chuyển tiếp thư',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Dùng tiến trình thẩm định SMTP?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Mật mã',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Cổng',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Máy chủ',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Sử dụng SSL khi kết nối',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Tên người dùng',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Quản lý tài khoản thư',

    'LBL_EMAIL_ADD'                         => 'Thêm địa chỉ',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Thêm',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'Danh sách mới',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Địa chỉ thư',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Hiện giờ chỉ có chỉnh sửa liên lạc được hỗ trợ.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Bộ lọc',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'Tên',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Họ',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'Địa chỉ liên lạc của tôi',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'Danh sách gửi thư của tôi',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Tên',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'Không tìm được địa chỉ nào',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Lưu và thêm vào sổ địa chỉ',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Tìm kiếm',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Chọn mục có Sổ địa chỉ',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Sổ địa chỉ',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Thông báo',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => '<img src=themes/default/images/icon_email_addressbook.gif align=absmiddle border=0> Address Book',

    'LBL_EMAIL_ADDRESSES'                   => 'Địa chỉ thư',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Địa chỉ thư',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Địa chỉ thư',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Nhập vào Sugar',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Chỉ định',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Đính kèm',
    'LBL_EMAIL_ATTACHMENT'                  => 'Đính kèm',
    'LBL_EMAIL_ATTACHMENTS'                 => 'Từ hệ thống cục bộ',
    'LBL_EMAIL_ATTACHMENTS2'                => 'Từ tài liệu trong Sugar',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Mẫu tập tin đính kèm',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'Tập tin',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Tài liệu',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Nhúng vào',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Hủy bỏ',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Đặt ký tự',
    'LBL_EMAIL_CHECK'                       => 'Kiểm tra thư',
    'LBL_EMAIL_CHECKING_NEW'                => 'Kiểm tra cho thư mới',
    'LBL_EMAIL_CHECKING_DESC'               => 'Đang kiểm tra thư mới. <br><br>Nếu đây là lần đầu kiểm tra cho tài khoản thư, xin chờ một vài phút.',
    'LBL_EMAIL_CLOSE'                       => 'Đóng',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Đang kiểm tra cho thư mới. <br><br>Khối lượng tài khoản thư lớn sẽ mất một khoảng thời gian.',
    'LBL_EMAIL_COMMON'                      => 'Chung',

    'LBL_EMAIL_COMPOSE'                     => 'Soạn thư',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Xin hãy ghi tên người nhận bức thư này.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Gắn với',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'Thư không có nội dung.  Bạn vẫn muốn chuyển?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'Thư không có đầu đề.  Bạn vẫn ,muốn chuyển đi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(Không tự đề)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Đọc & Soạn thư',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Gửi từ địa chỉ thư',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Lựa chọn',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Hãy gõ địa chỉ thư hợp lệ vào ô CC và BCC',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Hủy thư?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Xóa mục này từ sổ địa chỉ?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Bạn có chắc chắn muốn xoá chữ ký này?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Tạo ngày lưu--',

    'LBL_EMAIL_DATE_RECEIVED'               => 'Ngày nhận',
    'LBL_EMAIL_ASSIGNED_TO_USER'            =>'Giao cho người dùng',
    'LBL_EMAIL_DATE_TODAY'                  => 'Hôm nay',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Hôm qua',
    'LBL_EMAIL_DD_TEXT'                     => 'Chọn thư.',
    'LBL_EMAIL_DEFAULTS'                    => 'Mặc định',
    'LBL_EMAIL_DELETE'                      => 'Xóa',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Xóa thư được chọn?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Xóa thư thành công.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Đang xóa thư',
    'LBL_EMAIL_DETAILS'                     => 'Chi tiết',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Hiển thị thư {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Hiển thị đị chỉ thư {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Chỉnh sửa liên lạc',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Chỉ có địa chỉ chính sẽ được sử dụng khi làm việc với danh mục.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Chỉnh sửa danh sách thư',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Xóa thùng rác',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Xóa máy chủ ngoài',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'Xóa các tập tin bộ đệm',
    'LBL_EMAIL_EMPTY_MSG'                   => 'Không có thư nào được hiển thị.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'Không có địa chỉ thư nào được hiển thị.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Tên thư mục phải là duy nhất và không là thư mục trống. Xin hãy thử lại.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Không thể xóa một thư mục. Hoặc thư mục hay thư mục con có liên quan tới hòm thư.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Không thể xác định được thư mục.  Xin hãy thử lại.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Xin hãy kiểm tra các cài đặt của bạn.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Xin hãy chắc chắn bạn đang gõ họ của bạn.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Lỗi vừa được phát hiện: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'Bạn không có quyền truy cập vào khu vực này. Liên hệ quản trị viên của trang web của bạn để có được truy cập.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Tên thư mục trong Sugar phải là duy nhất.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Xin vui lòng nhập một số tiêu chí tìm kiếm.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'Một lỗi vừa xảy ra',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'Một danh sách email với tên đó đã tồn tại',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Tin nhắn đã được xóa khỏi máy chủ',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Hoặc thư đã xóa máy chủ hoặc chuyển đến một thư mục khác nhau',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Kết nối đến máy chủ thư không thành công. Xin vui lòng liên hệ quản trị viên của bạn.',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Chuyển thư qua lại giữa các máy chủ và các tài khoản không được hỗ trợ tại thời điểm này.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Chuyển bị lỗi',
    'LBL_EMAIL_ERROR_NAME'                  => 'Bắt buộc phải có tên.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'Địa chỉ gửi bắt buộc phải có.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Xin vui lòng cung cấp một tập tin.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Đổi tên thư mục IMAP không được hỗ trợ lúc này.',
    'LBL_EMAIL_ERROR_SERVER'                => 'Cần có tên máy chủ.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'Có thể tài khoản thư chưa được lưu.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'Một lỗi đã xảy ra trong khi giao tiếp với máy chủ thư.',
    'LBL_EMAIL_ERROR_USER'                  => 'Cần phải có tên truy nhập.',

    'LBL_EMAIL_ERROR_PASSWORD'              => 'Cần phải có mật mã.',
    'LBL_EMAIL_ERROR_PORT'                  => 'Cổng máy chủ cần phải nhập.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'Cần phải có giao thức của máy chủ.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Thư mục chính cần phải có.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Thư mục rác cần phải có.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'Thông tin này không tồn tại',

    'LBL_EMAIL_FOLDERS'                     => '<img src=themes/default/images/icon_email_folder.gif align=absmiddle border=0> Folders',
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Chuyển đến',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Thêm',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Thêm vào thư mục mới',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Lưu',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Thêm thư mục này vào',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'Thư mục này không thể bị thay đổi',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Bạn có chắc chắn rằng bạn muốn xoá thư mục này? \ N Quá trình không thể đảo ngược. \ N Lệnh xóa sẽ áp dụng cho cả các thư mục con.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'Tên mới cho thư mục',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Xin vui lòng lựa chọn một thư mục trước khi thực hiện hành động này.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Quản lý thư mục Sugar',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Sư dụng nhóm',




    'LBL_EMAIL_FORWARD'                     => 'Chuyển tiếp',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Tải xuống [[count]] của [[total]] số thư',
    'LBL_EMAIL_FOUND'                       => 'Tìm thấy',
    'LBL_EMAIL_FROM'                        => 'Từ',
    'LBL_EMAIL_GROUP'                       => 'nhóm',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Nhóm',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Trang chủ',
    'LBL_EMAIL_HTML_RTF'                    => 'Gửi HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Xóa tài khoản thư',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Xóa chữ ký',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Bản có thực sự muốn xóa tài khoản thư này?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Xóa thành công.',
    'LBL_EMAIL_IE_SAVE'                     => 'Lưu thông tin tài khoản',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Nhập thư',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Nhập vào Sugar',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Nhập cài đặt',
    'LBL_EMAIL_INVALID'                     => 'Không hợp lệ',





    'LBL_EMAIL_LOADING'                     => 'Chờ nạp...',
    'LBL_EMAIL_MARK'                        => 'Đánh dấu',
    'LBL_EMAIL_MARK_FLAGGED'                => 'Như đã dựng cờ',
    'LBL_EMAIL_MARK_READ'                   => 'Như đọc',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'Như không dựng cờ',
    'LBL_EMAIL_MARK_UNREAD'                 => 'Như không đọc',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Chỉ định đến',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Tạo thư mục',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Soạn để',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Xóa thư mục',
    'LBL_EMAIL_MENU_EDIT'                   => 'Chỉnh sửa',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Xóa thùng rác',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Đồng bộ hóa',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Xóa tập tin bộ đệm',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Xóa',
    'LBL_EMAIL_MENU_RENAME'                 => 'Sửa tên',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Sửa tên thư mục',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Đang sửa tên thư mục',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Xin vui lòng thực hiện một sự lựa chọn trước khi thực hiện thao tác này.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Tạo một Thư mục (từ xa hoặc trong Sugar)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Lưu trữ các thư điện tử trong SugarCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Danh sách các địa chỉ được chọn',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Gửi thư đến địa chỉ',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Xóa địa chỉ',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Xóa thư này',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Xóa thư mục (từ xa hoặc trong Sugar)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Chỉnh sửa địa chỉ liên lạc',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Chỉnh sửa danh sách thư',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Xóa hết các thùng rác trong tài khoản của bạn',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Đánh dấu cờ những thư này',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Đánh dấu thư đã đọc',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Mark these email(s) unflagged',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Đánh dấu thư chưa đọc',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Xóa bỏ danh sách thư',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Sửa tên thư mục (từ xa hoặc trong Sugar)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Trả lời thư',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Trả lời tới tất cả',

    'LBL_EMAIL_MESSAGES'                    => 'Thư',

    'LBL_EMAIL_ML_NAME'                     => 'Danh sách tên',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Danh sách địa chỉ đã được chọn',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Danh sách các địa chỉ có sẵn',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'Không',

    'LBL_EMAIL_OK'                          => 'Được',
    'LBL_EMAIL_ONE_MOMENT'                  => 'Xin chờ một lát...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Mở nhiều tin nhắn',
    'LBL_EMAIL_OPTIONS'                     => 'Lựa chọn',
    'LBL_EMAIL_OPT_OUT'                     => 'Opted Out',
    'LBL_EMAIL_PAGE_AFTER'                  => 'của {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'trang',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Thực hiện tác vụ',
    'LBL_EMAIL_PRIMARY'                     => 'Chính',
    'LBL_EMAIL_PRINT'                       => 'In',

    'LBL_EMAIL_QC_BUGS'                     => 'Lỗi',
    'LBL_EMAIL_QC_CASES'                    => 'Giải pháp',
    'LBL_EMAIL_QC_LEADS'                    => 'Tiềm năng',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Liên lạc',
    'LBL_EMAIL_QC_TASKS'                    => 'Tác vụ',
    'LBL_EMAIL_QUICK_CREATE'                => 'Tạo nhanh',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Xây dựng lại thư mục',
    'LBL_EMAIL_RELATE_TO'                   => 'Liên quan',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'Xem các mối quan hệ',
    'LBL_EMAIL_RECORD'          			=> 'Bản ghi thư điện tử',
    'LBL_EMAIL_REMOVE'                      => 'Xóa',
    'LBL_EMAIL_REPLY'                       => 'Trả lời',
    'LBL_EMAIL_REPLY_ALL'                   => 'Trả lời tới tất cả',
    'LBL_EMAIL_REPLY_TO'                    => 'Trả lời đến',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Lấy danh sách thư',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Lấy danh sách tin nhắn',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Lấy bản ghi thư điện tử',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Xin chỉ chọn một bản ghi thư điện tử',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Trở về mô-đun trước?',
    'LBL_EMAIL_REVERT'                      => 'Trở lại',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Thư liên quan',

    'LBL_EMAIL_RULES_TITLE'                 => 'Quản lý thói quen',

    'LBL_EMAIL_SAVE'                        => 'Lưu',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Lưu & Trả lời',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Lưu thư nháp',

    'LBL_EMAIL_SEARCHING'                   => 'Tiến hành tìm kiếm',
    'LBL_EMAIL_SEARCH'                      => '<img src=themes/default/images/Search.gif align=absmiddle border=0> Search',
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Tìm kiếm nâng cao',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Từ ngày',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'cho đến ngày',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Văn bản chính',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'Không có kết quả phù hợp với tiêu chí tìm kiếm của bạn.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Kết quả tìm kiếm',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Tìm kiếm đơn giản',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Tìm tài khoản thư',

    'LBL_EMAIL_SELECT'                      => 'Lựa chọn',

    'LBL_EMAIL_SEND'                        => 'Gửi',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Thư đang gửi',

    'LBL_EMAIL_SETTINGS'                    => 'Cài đặt',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 dòng',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Cột',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Phong cách bố trí',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Tài khoản thư',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Hình thức rõ ràng',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Xem sau khi nhập email',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Kiểm tra thư mới',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Sử dụng xem trước',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Sử dụng của sổ popup',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Số thư trên một trang',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Chỉnh sửa tài khoản thư',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Thư mục',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'Từ địa chỉ',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'Từ tên',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Toàn bộ màn hình',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Đồng bộ hóa tất cả các tài khoản thư',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Thực hiện hành động này sẽ đồng bộ hóa các tài khoản thư và nội dung.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Thực hiện đầy đủ đồng bộ hóa? \ N Nhiều tài khoản email có thể mất vài phút.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Bấm vào phím Shift hoặc phím Ctrl để chọn nhiều thư mục.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'Chung',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Nhóm thư mục có sẵn',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Tạo nhóm thư mục',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Lưu nhóm thư mục',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Lấy Nhóm Thư mục',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Chỉnh sửa nhóm thư mục',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Tên',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'Những cài đặt này có thể yêu cầu làm mới trang để kích hoạt.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Lấy tài khoản thư',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Thói quen',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'Các cài đặt đã được lưu. \ N \ n Bạn phải tải lại trang web cho các cài đặt mới để có hiệu lực.',
    'LBL_EMAIL_SETTINGS_SAVE_OUTBOUND'      => 'Chuyển tới mục thư gửi',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Gửi thư dưới dạng Plain Text',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Kích hoạt tài khoản thư',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Số thư trên một trang',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Để các ô tab xuống cuối',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Cài đặt hình ảnh',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Ưu tiên',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Lựa chọn cao',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Các thư mục có sẵn',

    'LBL_EMAIL_SHOW_READ'                   => 'Hiện tất',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Chỉ hiển thị Chưa đọc',
    'LBL_EMAIL_SIGNATURES'                  => 'Chữ ký',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Tạo chữ ký',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Tên chữ ký',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Nội dung chữ ký',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Thư mục từ xa ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Thư mục trong Sugar ]',
    'LBL_EMAIL_SUBJECT'                     => 'Chủ đề',
    'LBL_EMAIL_TO'                     		=> 'Đến',
    'LBL_EMAIL_SUCCESS'                     => 'Thành công',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'Thư mục Sugar',



    'LBL_EMAIL_TEMPLATES'                   => 'Mẫu',
    'LBL_EMAIL_TEXT_FIRST'                  => 'Trang đầu',
    'LBL_EMAIL_TEXT_PREV'                   => 'Trang trước',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Trang sau',
    'LBL_EMAIL_TEXT_LAST'                   => 'Trang cuối cùng',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Tải lại',
    'LBL_EMAIL_TO'                          => 'Tới',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Chuyển danh s',
    'LBL_EMAIL_VIEW'                        => 'Xem',
    'LBL_EMAIL_VIEWS'                       => 'Xem',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Hiện tựa đề',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Phiên bản có thể in',
    'LBL_EMAIL_VIEW_RAW'                    => 'Hiển thị nguyên trạng của thư',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'Tính năng này là không được hỗ trợ khi dùng với POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Văn bản liên kết mặc định.',
    'LBL_EMAIL_YES'                         => 'Đúng',

    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => "Manually",
        '5' => 'Every 5 minutes',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour'
    ),
    'LBL_EMAIL_SETTING_NUM_DOM'             => array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),

    'LBL_EMAIL_MESSAGE_NO'                  => 'Không có tin nhắn',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Qua nhập',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Nhập không thành công tin nhắn đã có sẵn hoặc đã bị xóa khỏi máy chủ',

    'LBL_LINK_NONE'=> 'Không',
    'LBL_LINK_ALL'=> 'Tất',
    'LBL_LINK_RECORDS'=> 'Ghi',
    'LBL_LINK_SELECT'=> 'Lựa chọn',



















    'ERR_CREATING_FIELDS' => 'Có lỗi trong khi điền chi thông tin chi tiết : ',
    'ERR_CREATING_TABLE' => 'Lỗi trong khi tạo bảng',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "Không dùng dấu phân cách hàng nghìn giống với dấu phân cách phần thập phân.\\n\\n  Xin hãy .",
    'ERR_DELETE_RECORD' => 'Số ghi nhớ phải được chỉ định để xóa các địa chỉ liên lạc.',
    'ERR_EXPORT_DISABLED' => 'Đình chỉ xuất.',
    'ERR_EXPORT_TYPE' => 'Xuất ra bị lỗi',
    'ERR_INVALID_AMOUNT' => 'Xin hãy nhập số lượng hợp lệ',
    'ERR_INVALID_DATE_FORMAT' => 'Định dạng ngày phải là ',
    'ERR_INVALID_DATE' => 'Xin hãy nhập ngày tháng hợp lệ.',
    'ERR_INVALID_DAY' => 'Xin hãy nhập thứ hợp lệ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Địa chỉ thư không hợp lệ.',
    'ERR_INVALID_FILE_REFERENCE' => 'Tham chiếu tập tin không hợp lệ',
    'ERR_INVALID_HOUR' => 'xin hãy nhập đúng giờ.',
    'ERR_INVALID_MONTH' => 'Xin hãy nhập đúng tháng.',
    'ERR_INVALID_TIME' => 'Xin hãy nhập đúng thời gian.',
    'ERR_INVALID_YEAR' => 'Xin vui lòng nhập năm hợp l.',
    'ERR_NEED_ACTIVE_SESSION' => 'An active session is required to export content.',
    'ERR_NO_HEADER_ID' => 'Tính năng này không có sẵn trong chủ đề này.',
    'ERR_NOT_ADMIN' => "không được phép phép truy cập vào quản lý.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Thiếu trường bắt buộc:',
    'ERR_INVALID_VALUE' => 'Giá trị không hợp lệ:',
    'ERR_NO_SUCH_FILE' =>'Tập tin không tồn tại trên hệ thống',
    'ERR_NO_SINGLE_QUOTE' => 'Không thể sử dụng Cannot use the single quotation mark for ',
    'ERR_NOTHING_SELECTED' =>'Xin vui lòng thực hiện một sự lựa chọn trước khi tiếp tục.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'An opportunity with the name %s already exists.  Please enter another name below.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'An opportunity name was not entered.  Please enter an opportunity name below.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SugarCRM.',
    'ERR_SELF_REPORTING' => 'User cannot report to him or herself.',
    'ERR_SINGLE_QUOTE'  => 'Using the single quote is not supported for this field.  Please change the value.',
    'ERR_SQS_NO_MATCH_FIELD' => 'No match for field: ',
    'ERR_SQS_NO_MATCH' =>'No Match',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',

    'LBL_ACCOUNT'=>'Tài khoản',
    'LBL_OLD_ACCOUNT_LINK'=>'Tài khoản cũ',
    'LBL_ACCOUNTS'=>'Tài khoản',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Xem tóm tắt',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Xem tóm tắt [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Thêm [Alt+A]',
    'LBL_ADD_BUTTON' => 'Thêm',
    'LBL_ADD_DOCUMENT' => 'Thêm tài liệu',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Thêm vào danh sách mục tiêu',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Thêm vào danh sách mục tiêu',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Ấn vào để đóng',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Đóng',
    'LBL_ADDITIONAL_DETAILS' => 'Chi tiết thêm',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => 'Alt+',
    'LBL_ARCHIVE' => 'Lưu trữ',
    'LBL_ASSIGNED_TO_USER'=>'Giao cho người dùng',
    'LBL_ASSIGNED_TO' => 'Giao cho:',
    'LBL_BACK' => 'Trở lại',
    'LBL_BILL_TO_ACCOUNT'=>'Bill to Account',
    'LBL_BILL_TO_CONTACT'=>'Bill to Contact',
    'LBL_BILLING_ADDRESS'=>'Billing Address',




    'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',

    'LBL_BUGS'=>'Lỗi',
    'LBL_BY' => 'Bởi',
    'LBL_CALLS'=>'Gọi',
    'LBL_CALL'=>'Gọi',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Hủy bỏ',
    'LBL_CANCEL_BUTTON_TITLE' => 'Hủy bỏ [Alt+X]',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Gửi',
    'LBL_CASE'=>'Giải pháp',
    'LBL_CASES'=>'Giải pháp',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_BUTTON_LABEL' => 'Thay đổi',
    'LBL_CHANGE_BUTTON_TITLE' => 'Thay đổi [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Tích hết',
    'LBL_CITY' => 'Thành phố',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Xóa',
    'LBL_CLEAR_BUTTON_TITLE' => 'Xóa [Alt+C]',
    'LBL_CLEARALL' => 'Bỏ tích hết',
    'LBL_CLOSE_BUTTON_TITLE' =>'Đóng',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Đóng cửa sổ',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Đóng hết',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Đóng hết [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Đóng và tạo mới',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Đóng và tạo mới',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Soạn thư',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Soạn thư [Alt+L]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Có',
    'LBL_SEARCH_DROPDOWN_NO'=>'Không',
    'LBL_CONTACT_LIST' => 'Danh sách liên lạc',
    'LBL_CONTACT'=>'Liên lạc',
    'LBL_CONTACTS'=>'Liên lạc',
    'LBL_CONTRACTS'=>'Hợp đồng',
    'LBL_COUNTRY' => 'Nước:',
    'LBL_CREATE_BUTTON_LABEL' => 'Tạo',
    'LBL_CREATED_BY_USER'=>'Tạo bởi người dùng',
    'LBL_CREATED_USER'=>'Tạo bởi người dùng',
    'LBL_CREATED_ID' => 'Tạo bởi Id',
    'LBL_CREATED' => 'Tạo bởi',
    'LBL_CURRENT_USER_FILTER' => 'Chỉ có mục của tôi:',
    'LBL_CURRENCY'=>'Tiền tệ:',
    'LBL_DOCUMENTS'=>'Tài liệu',
    'LBL_DATE_ENTERED' => 'Ngày tạo:',
    'LBL_DATE_MODIFIED' => 'Thay đổi lần cuối:',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Xóa',
    'LBL_DELETE_BUTTON_TITLE' => 'Xóa [Alt+D]',
    'LBL_DELETE_BUTTON' => 'Xóa',
    'LBL_DELETE' => 'Xóa',
    'LBL_DELETED'=>'Đã xóa',
    'LBL_DIRECT_REPORTS'=>'Các báo cáo trực tiếp',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Xong',
    'LBL_DONE_BUTTON_TITLE' => 'Xong [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'The application requires a Daylight Saving Time fix to be applied.  Please go to the <a href="index.php?module=Administration&action=DstFix">Repair</a> link in the Admin console and apply the Daylight Saving Time fix.',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Trùng lặp',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Trùng lặp [Alt+U]',
    'LBL_DUPLICATE_BUTTON' => 'trùng lặp',
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Chỉnh sửa',
    'LBL_EDIT_BUTTON_TITLE' => 'Chỉnh sửa [Alt+E]',
    'LBL_EDIT_BUTTON' => 'Chỉnh sửa',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Sửa thành mới',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Sửa thành mới',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Xem',
    'LBL_VIEW_BUTTON_TITLE' => 'Xem [Alt+V]',
    'LBL_VIEW_BUTTON' => 'Xem',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Gửi thư theo dạng PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Gửi thư theo dạng PDF [Alt+M]',
    'LBL_EMAILS'=>'Thư',
    'LBL_EMPLOYEES' => 'Nhân viên',
    'LBL_ENTER_DATE' => 'Ngày',
    'LBL_EXPORT_ALL' => 'Xuất hết ra',
    'LBL_EXPORT' => 'Xuất ra',
    'LBL_GO_BUTTON_LABEL' => 'Tiếp',
    'LBL_HIDE'=>'Ẩn',
    'LBL_ID'=>'ID',
    'LBL_IMPORT_PROSPECTS'=>'Nhập mục tiêu',
    'LBL_IMPORT' => 'Nhập',
    'LBL_IMPORT_STARTED' => 'Nhập đã bắt đầu: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Cần phải định rõ dấu phân cách.',
    'LBL_LAST_VIEWED' => 'Last Viewed',
    'LBL_TODAYS_ACTIVITIES' => 'Hoạt động của hôm nay',
    'LBL_LEADS'=>'Leads',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'Chiến dịch:',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGNLOG' => 'Ghi chiến dịch',
    'LBL_CAMPAIGN_CONTACT'=>'Chiến dịch',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Sơ đồ',
    'LBL_FOUND_IN_RELEASE'=>'Found In Release',
    'LBL_FIXED_IN_RELEASE'=>'Fixed In Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_ASSIGNED_USER' => 'Người dùng',
    'LBL_LIST_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_LIST_CONTACT_ROLE' => 'Vai trò Liên hệ',
    'LBL_LIST_EMAIL' => 'Thư điện tử',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_OF' => 'Của',
    'LBL_LIST_PHONE' => 'Số điện thoại',
    'LBL_LIST_RELATED_TO' => 'Liên quan đến',
    'LBL_LIST_USER_NAME' => 'Tên người dùng',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Bạn có muốn cập nhật những thông tin trên?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Xin vui lòng lựa chọn ít nhất 1 hồ sơ để tiếp tục.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Xin vui lòng lựa chọn ít nhất 2 hồ sơ để tiếp tục.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Xin vui lòng lựa chọn ít hơn 10 hồ sơ để tiếp tục.',
    'LBL_LISTVIEW_ALL' => 'Tất cả',
    'LBL_LISTVIEW_NONE' => 'Không',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'Trang này',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'Tất cả bản ghi',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Chọn tất cả bản ghi',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Đã chọn: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Xin hãy đăng nhập để có quyền truy cập vào khu vực này.',
    'LBL_LOGOUT' => 'Thoát',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Nhập thư',
    'LBL_MASS_UPDATE' => 'Cập nhật cả khối',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_MEETINGS'=>'Họp',
    'LBL_MEETING'=>'Họp',
    'LBL_MEMBERS'=>'Thành viên',
    'LBL_MEMBER_OF'=>'Thành viên của',
    'LBL_MODIFIED_BY_USER'=>'Chỉnh sửa theo người dùng',
    'LBL_MODIFIED_USER'=>'Chỉnh sửa theo người dùng',
    'LBL_MODIFIED' => 'Chỉnh sửa theo',
    'LBL_MODIFIED_NAME'=>'Chỉnh sửa theo tên',
    'LBL_MODIFIED_ID'=>'Chỉnh sửa theo Id',
    'LBL_MORE' => 'Thêm',
    'LBL_MY_ACCOUNT' => 'Tài khoản của tôi',
    'LBL_NAME' => 'Tên',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Tạo tài khoản',
    'LBL_NEW_BUTTON_TITLE' => 'Tạo [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Tiếp',
    'LBL_NONE' => '--Không--',
    'LBL_NOTES'=>'Ghi chú',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Mở tất',
    'LBL_OPENALL_BUTTON_TITLE' => 'Mở tất [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Mở đến: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Mở đến: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'Opportunities',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_OPPORTUNITY'=>'Opportunity',
    'LBL_OR' => 'OR',
    'LBL_LOWER_OR' => 'or',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Lượt',
    'LBL_POSTAL_CODE' => 'Mã bưu điện:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCT_BUNDLES'=>'Các gói sản phẩm',
    'LBL_PRODUCT_BUNDLES'=>'Các gói sản phẩm',
    'LBL_PRODUCTS'=>'Sản Phẩm',
    'LBL_PROJECT_TASKS'=>'Công việc dự án',
    'LBL_PROJECTS'=>'Dự án',
    'LBL_PROJECTS'=>'Dự án',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Create Opportunity from Quote',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Create Opportunity from Quote [Alt+O]',
    'LBL_QUOTES_SHIP_TO'=>'Quotes Ship to',
    'LBL_QUOTES'=>'Quotes',
    'LBL_QUOTES_OBSOLETE'=>'Quotes(Obsolete)',
    'LBL_RELATED' => 'Related',
    'LBL_RELATED_INFORMATION' => 'Thông tin liên quan',
    'LBL_RELATED_RECORDS' => 'Bản ghi liên quan',
    'LBL_REMOVE' => 'Remove',
    'LBL_REPORTS_TO' => 'Thông báo đến',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Lưu',
    'LBL_SAVE_BUTTON_TITLE' => 'Lưu [Alt+S]',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Lưu với tên mới',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Lưu với tên mới [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Mẫu đầy đủ',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Mẫu đầy đủ [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Lưu và tạo mới',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Lưu và tạo mới [Alt+V]',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Tìm kiếm',
    'LBL_SEARCH_BUTTON_TITLE' => 'Tìm kiếm [Alt+Q]',
    'LBL_SEARCH' => 'Tìm kiếm',
    'LBL_SEE_ALL' => 'Xem tất',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Lựa chọn',
    'LBL_SELECT_BUTTON_TITLE' => 'Lựa chọn [Alt+T]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Duyệt tập tin',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Duyệt tập tin [Alt+B]',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Lựa chọn liên lạc',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Lựa chọn liên lạc [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'Tập tin được lựa chọn',
    'LBL_GRID_SELECTED_FILES' => 'Tập tin được lựa chọn',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Lựa chọn từ báo cáo',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Lựa chọn báo cáo',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Chọn người sử dụng',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Chọn người sử dụng [Alt+U]',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Nguồn tài nguyên để xây dựng trang (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'Thứ hai.',
    'LBL_SERVER_RESPONSE_TIME' => 'Thời gian máy chủ trả lời:',
    'LBL_SHIP_TO_ACCOUNT'=>'Gửi đến tài khoản',
    'LBL_SHIP_TO_CONTACT'=>'Gửi đến địa chỉ',
    'LBL_SHIPPING_ADDRESS'=>'Địa chỉ gửi',
    'LBL_SHORTCUTS' => 'Đường tắt',
    'LBL_SHOW'=>'Thể hiện',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'trạng thái:',
    'LBL_STATUS_UPDATED'=>'Trạng thái của bạn đã được cập nhập!',
    'LBL_STATUS'=>'Trạng thái:',
    'LBL_SUBJECT' => 'Chủ đề',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */
    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2009 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">GPLv3</a>.',



    'LBL_SYNC' => 'Đồng bộ',
    'LBL_SYNC' => 'Đồng bộ',
    'LBL_TABGROUP_ALL' => 'Tất cả',
    'LBL_TABGROUP_ACTIVITIES' => 'Hoạt động',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_HOME' => 'Trang chủ',
    'LBL_TABGROUP_MARKETING' => 'Tiếp thị',
    'LBL_TABGROUP_MY_PORTALS' => 'Cổng điện tử của tôi',
    'LBL_TABGROUP_OTHER' => 'Khác',
    'LBL_TABGROUP_REPORTS' => 'Báo cáo',
    'LBL_TABGROUP_SALES' => 'Bán hàng',
    'LBL_TABGROUP_SUPPORT' => 'Hỗ trợ',
    'LBL_TABGROUP_TOOLS' => 'Công cụ',



    'LBL_TASKS'=>'Tác vụ',
    'LBL_TEAMS_LINK'=>'Nhóm',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Lưu thư',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Lưu thư [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Unauthorized access to administration',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Không xóa',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Không xóa [Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Không xóa',
    'LBL_UNDELETE' => 'Không xóa',
    'LBL_UNSYNC' => 'Không đồng bộ',
    'LBL_UPDATE' => 'Cập nhật',
    'LBL_USER_LIST' => 'Danh sách người dùng',
    'LBL_USERS_SYNC'=>'Đồng bộ người dùng',
    'LBL_USERS'=>'Người dùng',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME'=>'Checking for existing portal name...',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Print as PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Print as PDF [Alt+P]',

    'LNK_ABOUT' => 'About',
    'LNK_ADVANCED_SEARCH' => 'Advanced Search',
    'LNK_BASIC_SEARCH' => 'Basic Search',
    'LNK_SAVED_VIEWS' => 'Saved Search & Layout',
    'LNK_DELETE_ALL' => 'del all',
    'LNK_DELETE' => 'del',
    'LNK_EDIT' => 'edit',
    'LNK_GET_LATEST'=>'Get latest',
    'LNK_GET_LATEST_TOOLTIP'=>'Replace with latest version',
    'LNK_HELP' => 'Help',
    'LNK_LIST_END' => 'End',
    'LNK_LIST_NEXT' => 'Next',
    'LNK_LIST_PREVIOUS' => 'Previous',
    'LNK_LIST_RETURN' => 'Return to List',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED'=>'Sign',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Replace with signed document',
    'LNK_PRINT' => 'Print',
    'LNK_REMOVE' => 'rem',
    'LNK_RESUME' => 'Resume',
    'LNK_VIEW_CHANGE_LOG' => 'View Change Log',


    'NTC_CLICK_BACK' => 'Please click the browser back button and fix the error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Are you sure you want to delete selected record(s)?',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Are you sure you want to delete the ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Are you sure you want to update the ',
    'NTC_DELETE_SELECTED_RECORDS' =>' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => 'Please enter your user name and password:',
    'NTC_NO_ITEMS_DISPLAY' => 'none',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this relationship?',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_SUPPORT_SUGARCRM' => 'Support the SugarCRM open source project with a donation through PayPal - it\'s fast, free and secure!',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Welcome',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SugarCRM logos.',
    'ERROR_FULLY_EXPIRED'=> "Your company's license for SugarCRM has expired for more than 30 days and needs to be brought up to date. Only admins may login.",
    'ERROR_LICENSE_EXPIRED'=> "Your company's license for SugarCRM needs to be updated. Only admins may login",
    'ERROR_LICENSE_VALIDATION'=> "Your company's license for SugarCRM needs to be validated. Only admins may login",
    'WARN_LICENSE_SEATS'=>  "Warning: The number of active users is already the maximum number of licenses allowed.",
    'WARN_ONLY_ADMINS'=> "Only admins may log in.",    
    'ERROR_NO_RECORD' => 'Error retrieving record.  This record may be deleted or you may not be authorized to view it.',
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'LBL_DUP_MERGE'=>'Find Duplicates',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Manage Subscriptions',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Manage Subscriptions for ',
    'LBL_SUBSCRIBE'=>'Subscribe',
    'LBL_UNSUBSCRIBE'=>'Unsubscribe',
    // Ajax status strings
    'LBL_LOADING' => 'Đang tải ...',
    'LBL_SEARCHING' => 'Đang tìm kiếm...',
    'LBL_SAVING_LAYOUT' => 'Đang lưu bố trí ...',
    'LBL_SAVED_LAYOUT' => 'Bố trí đã được lưu.',
    'LBL_SAVED' => 'Đã lưu',
    'LBL_SAVING' => 'Đang lưu',
    'LBL_FAILED' => 'Thất bại!',
    'LBL_DISPLAY_COLUMNS' => 'Hiện cột',
    'LBL_HIDE_COLUMNS' => 'Ẩn cột',
    'LBL_SEARCH_CRITERIA' => 'Tiêu chuẩn tìm kiếm',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST'=>'Đang xử lý..',
    'LBL_REQUEST_PROCESSED'=>'Xong',





    'LBL_MERGE_DUPLICATES'  => 'Merge Duplicates',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Saved Searches',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Perform a search using the search form above',
    'LBL_DETAILVIEW'=>'Detail View',
    'LBL_LISTVIEW'=>'List View',
    'LBL_EDITVIEW'=>'Edit View',
    'LBL_SEARCHFORM'=>'Search Form',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Hiện thông báo',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Hệ thống',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Chương trình đã hết thời gian.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nChương trình nghị sự: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Họp',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Gọi',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Thời gian: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Địa điểm: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Miêu tả: ',
    'MSG_JS_ALERT_MTG_REMINDER_MSG' => "\nNhấp vào OK để xem cuộc họp này hoặc nhấp vào Huỷ để bỏ thông báo này.",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Thêm vào mục yêu thích',
    'LBL_MARK_AS_FAVORITES' => 'Đánh dấu như mục yêu thích',
    'LBL_CREATE_CONTACT' => 'Tạo liên lạc',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_NOTE' => 'Tạo ghi chú',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SCHEDULE_CALL' => 'Lịch trình gọi',
    'LBL_SCHEDULE_MEETING' => 'Lịch trình họp, hội nghị',
    'LBL_CREATE_TASK' => 'Tạo tác vụ',
    'LBL_REMOVE_FROM_FAVORITES' => 'xoá khỏi mục yêu thích của tôi',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Tạo Mẫu',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Lưu trang web theo hình thức hướng dẫn',

    'LBL_PLEASE_SELECT' => 'Xin hãy chọn',
    'LBL_REDIRECT_URL'=>'Chuyển hướng URL',
    'LBL_RELATED_CAMPAIGN' =>'Chiến dịch liên quan',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Thêm tất cả các trường',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Xóa hết các trường',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Chỉ được phép nhúng ảnh',
    'LBL_REMOVE' => 'Remove',
    'LBL_TRAINING' => 'Training',
    'ERR_DATABASE_CONN_DROPPED'=>'Error executing a query. Possibly, your database dropped the connection. Please refresh this page, you may need to restart you web server.',
    'ERR_MSSQL_DB_CONTEXT' =>'Changed database context to',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Warning: field [[field]] does not have a mapped entry in [moduleDir] vardefs.php file',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing.  Unable to create because no corresponding HTML file was found.',
	'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
	'LBL_ALT_ADDRESS' => 'Other Address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (Trang chủ và Bảng điều khiển) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Chung',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Lọc',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Chỉ mục của tôi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tiêu đề',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Hiện hàng',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Creating New Page ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Bạn vừa tạo một trang mới. Bạn có thểm thêm nội dung bằng Add Sugar Dashlets lựa chọn thực đơn.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Bạn có muốn xóa trang này không?',
    'LBL_SAVING_PAGE_TITLE' => 'Đang lưu trang ...',
    'LBL_RETRIEVING_PAGE' => 'Đang lấy trang ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Bạn đã vượt quá số Sugar Dashlets mà quản trị cho phép. Xin hãy xóa một vài Sugar Dashlet để được phép thêm.',
    'LBL_ADDING_DASHLET' => 'Đang thêmSugar Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Đã thêm Sugar Dashlet',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Bạn có muốn xóa Dashlets?',
    'LBL_REMOVING_DASHLET' => 'Đang xóa dashlets ...',
    'LBL_REMOVED_DASHLET' => 'Xóa xong',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Thêm trang',
    'LBL_DELETE_PAGE' => 'Xóa trang',
    'LBL_CHANGE_LAYOUT' => 'Thay đổi bố cục',
    'LBL_RENAME_PAGE' => 'Đổi tên trang',

    'LBL_LOADING_PAGE' => 'Đang tải trang, xin hãy đợi...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this Sugar Dashlet.',
    'LBL_ADD_DASHLETS' => 'Thêm biểu đồ Sugar',
    'LBL_CLOSE_DASHLETS' => 'Đóng',
    'LBL_OPTIONS' => 'Lựa chọn',
    'LBL_NUMBER_OF_COLUMNS' => 'Lựa chọn số cột',
    'LBL_1_COLUMN' => '1 cột',
    'LBL_2_COLUMN' => '2 cột',
    'LBL_3_COLUMN' => '3 cột',
    'LBL_PAGE_NAME' => 'Tên trang',

    'LBL_SEARCH_RESULTS' => 'Kết quả tìm kiếm',
    'LBL_SEARCH_MODULES' => 'Mô-đun',
    'LBL_SEARCH_CHARTS' => 'Biểu đồ',
    'LBL_SEARCH_REPORT_CHARTS' => 'báo cáo các biểu đồ',
    'LBL_SEARCH_TOOLS' => 'Công cụ',
    'LBL_SEARCH_HELP_TITLE' => 'Làm việc với nhiều lựa chọn và tìm kiếm đã lưu',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Đóng',

    'ERR_BLANK_PAGE_NAME' => 'Xin hãy gõ tên trang.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Không có ảnh',

    'LBL_MODULE' => 'Mô-đun',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copy address from left:',
    'LBL_SAVE_AND_CONTINUE' => 'Save and Continue',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Lỗi: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Không thể tạo monitor vì metadata file trống hoặc tập tin không tồn tại.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Lỗi: Không có cấu hình theo dõi cho tên được yêu cầu',
    'ERR_UNDEFINED_METRIC' => 'Lỗi: Không thể đặt giá trị cho các hệ chưa xác định',
    'ERR_STORE_FILE_MISSING' => 'Lỗi:Không thể tìm thấy file lưu trữ',

    'LBL_MONITOR_ID' => 'Monitor Id',




    'LBL_USER_ID' => 'User Id',
    'LBL_MODULE_NAME' => 'Tên mô-đun',
    'LBL_ITEM_ID' => 'Itiem Id',
    'LBL_ITEM_SUMMARY' => 'mục tóm tắt',
    'LBL_ACTION' => 'Hoạt động',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Ngày của hoạt động cuối cùng',







































    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',

    'LBL_PORTAL_WELCOME_TITLE' => 'Chào mừng đến với Sugar 5.1.0',
    'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to Sugar that can be deployed within any website.  Stay tuned for more customer self service features like Project Management and Forums in our future releases.',
    'LBL_LIST' => 'Danh sách',
    'LBL_CREATE_CASE' => 'tạo giải pháp',
    'LBL_CREATE_BUG' => 'Tạo lỗi',
    'LBL_NO_RECORDS_FOUND' => '- 0 bản ghi được tìm thấy -',

    'DATA_TYPE_DUE' => 'Kỳ hạn:',
  	'DATA_TYPE_START' => 'Bắt đầu:',
  	'DATA_TYPE_SENT' => 'Gửi:',
  	'DATA_TYPE_MODIFIED' => 'Chỉnh sửa:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Đếm',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'Ảnh đối tượng',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Chọn ngày',

    'LBL_VALIDATE_RANGE' => 'không phải là trong phạm vi hợp lệ',

    //jchi #	20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tất cả',

    'LBL_OPERATOR_IN_TEXT' => 'Một trong những cách sau:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'không phải là một trong những cách sau:',


	//Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Lỗi: Mảng truy cập có kết quả không khớp.',
	'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Lỗi: Thiếu bản đồ mục nhập cho mô-đun.',
	'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Lỗi: Không thể lấy dữ liệu cho {0} kết nối.  Dịch vụ có thể không dùng được hoặc cấu hình cài đặt không hợp lệ.  Thông báo lỗi kết nối: ({1}).',
	'LBL_MERGE_CONNECTORS' => 'Get Data',
	'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
	'LBL_REMOVE_MODULE_ENTRY' => 'lại có chắc bạn muốn vô hiệu hóa nối tích hợp cho mô-đun này?',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Xin lỗi bạn không thể xóa nhóm chung. Bỏ qua',
    'LBL_MASSUPDATE_DELETE_PRIVATE_TEAMS'=>'Xin lỗi, bạn không thể xoá các nhóm riêng. Bỏ qua',
    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Xin lỗi chức năng Flash của máy bạn đã bị khóa hoặc bạn đang có một bản FlashPlayer cũ xin hãy vào địa chỉ <a href="http://www.adobe.com/go/getflashplayer/">để lấy bản FlashPlayer mới nhất</a> Hoặ bật Flash lên.',

);

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books'=>'Sách', 'Music'=>'Nhạc', 'DVD'=>'DVD', 'Magazines'=>'Tạp chí');
$app_list_strings['moduleList']['EmailAddresses'] = 'Email Address';

$app_list_strings['kbdocument_status_dom'] = 'Nháp';
$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Draft',
    'In Review' => 'Đang đánh giá',
    'Published' => 'Xuất bản',
);

$app_list_strings['project_priority_default'] = 'Trung bình';
$app_list_strings['project_priority_options'] = array (
    'High' => 'Cao',
    'Medium' => 'Trung bình',
    'Low' => 'Thấp',
);


  $app_list_strings['kbdocument_status_dom'] =
    array (
    'Draft' => 'Nháp',
    'Expired' => 'Hết hạn',
    'In Review' => 'Đang đánh giá',
    'Published' => 'Xuất bản',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Hoạt động của quản trị viên--',
    'Create New Tag' => 'Tạo thẻ mới',
    'Delete Tag'=>'Xóa thẻ',
    'Rename Tag'=>'Đổi tên thẻ',
    'Move Selected Articles'=>'Chuyển bài được lựa chọn',
    'Apply Tags On Articles'=>'Gắn thẻ cho tất cả các bài viết',
    'Delete Selected Articles'=>'Xóa bài viết được lựa chọn',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Có tập tin đính kèm',
        'none' => 'Không có gì',
        'mime' => 'Specify Mime Type',
        'name' => 'Ghi rõ Tên',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Kiến thức cơ sở';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Tạo bài viết';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Đầu 5',
    'Top_10' => 'Đầu 10',
    'Top_20' => 'Đầu 20',
    'Bot_5'  => 'Đáy 5',
    'Bot_10' => 'Đáy 10',
    'Bot_20' => 'Đáy 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'All',
        'added' => 'Thêm 30 ngày mới nhất',
        'pending' => 'Chờ đợi sự đồng ý của tôi',
        'updated' =>'Cập nhật 30 ngày mới nhất',
        'faqs' => 'Những câu hỏi thường gặp',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'Trên',
    'before' => 'Trước khi',
    'after' => 'Sau khi',
    'between_dates' => 'Giữa',
    'last_7_days' => '7 ngày trước',
    'next_7_days' => '7 ngày tới',
    'last_month' => 'Tháng trước',
    'this_month' => 'Tháng này',
    'next_month' => 'Tháng tới',
    'last_30_days' => '30 ngày trước',
    'next_30_days' => '30 ngày tới',
    'last_year' => 'Năm trước',
    'this_year' => 'Năm nay',
    'next_year' => 'Năm tới',
    'isnull' => 'Là rỗng',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGERIA',
        'AMERICAN SAMOA' => 'AMERICAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARCTICA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIUM',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ISLAND',
        'BRAZIL' => 'BRAZIL',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
        'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODIA',
        'CAMEROON' => 'CAMEROON',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'CANAL ZONE',
        'CANARY ISLAND' => 'CANARY ISLAND',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
        'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORO ISLANDS',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ISLANDS',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROATIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPRUS',
        'CZECH REPUBLIC' => 'CZECH REPUBLIC',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DENMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPT',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETHIOPIA',
        'FAEROE ISLANDS' => 'FAEROE ISLANDS',
        'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANCE',
        'FRENCH GUIANA' => 'FRENCH GUIANA',
        'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIA',
        'GERMANY' => 'GERMANY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GREECE',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGARY',
        'ICELAND' => 'ICELAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIA',
        'INDONESIA' => 'INDONESIA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAQ',
        'IRELAND' => 'IRELAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALY',
        'IVORY COAST' => 'IVORY COAST',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KAZAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA, SOUTH',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KYRGYZSTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LATVIA',
        'LEBANON' => 'LEBANON',
        'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITHUANIA',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVES',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MOROCCO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NETHERLANDS',
        'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORWAY',
        'OMAN' => 'OMAN',
        'OTHER' => 'OTHER',
        'PACIFIC ISLAND' => 'PACIFIC ISLAND',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINES',
        'POLAND' => 'POLAND',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANIA',
        'RUSSIA' => 'RUSSIA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIA',
        'SLOVENIA' => 'SLOVENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'SOUTH AFRICA',
        'SOUTH YEMEN' => 'SOUTH YEMEN',
        'SPAIN' => 'SPAIN',
        'SPANISH SAHARA' => 'SPANISH SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SWEDEN',
        'SWITZERLAND' => 'SWITZERLAND',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TAJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNISIA',
        'TURKEY' => 'TURKEY',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
        'UNITED KINGDOM' => 'UNITED KINGDOM',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
        'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATICAN CITY',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'WEST INDIES',
        'WESTERN SAHARA' => 'WESTERN SAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillic)',
    'CP1252'    => 'CP1252 (MS Western European & US)',
    'EUC-CN'    => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japanese)',
    'EUC-KR'    => 'EUC-KR (Korean)',
    'EUC-TW'    => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1'  => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2'  => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7'  => 'ISO-8859-7 (Greek)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

      'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El_Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St_Helena',
  'Africa/Sao_Tome' => 'Africa/Sao_Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Asia/Kabul',
  'Asia/Yerevan' => 'Asia/Yerevan',
  'Asia/Baku' => 'Asia/Baku',
  'Asia/Bahrain' => 'Asia/Bahrain',
  'Asia/Dhaka' => 'Asia/Dhaka',
  'Asia/Thimphu' => 'Asia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asia/Brunei',
  'Asia/Rangoon' => 'Asia/Rangoon',
  'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
  'Asia/Harbin' => 'Asia/Harbin',
  'Asia/Shanghai' => 'Asia/Shanghai',
  'Asia/Chongqing' => 'Asia/Chongqing',
  'Asia/Urumqi' => 'Asia/Urumqi',
  'Asia/Kashgar' => 'Asia/Kashgar',
  'Asia/Hong_Kong' => 'Asia/Hong_Kong',
  'Asia/Taipei' => 'Asia/Taipei',
  'Asia/Macau' => 'Asia/Macau',
  'Asia/Nicosia' => 'Asia/Nicosia',
  'Asia/Tbilisi' => 'Asia/Tbilisi',
  'Asia/Dili' => 'Asia/Dili',
  'Asia/Calcutta' => 'Asia/Calcutta',
  'Asia/Jakarta' => 'Asia/Jakarta',
  'Asia/Pontianak' => 'Asia/Pontianak',
  'Asia/Makassar' => 'Asia/Makassar',
  'Asia/Jayapura' => 'Asia/Jayapura',
  'Asia/Tehran' => 'Asia/Tehran',
  'Asia/Baghdad' => 'Asia/Baghdad',
  'Asia/Jerusalem' => 'Asia/Jerusalem',
  'Asia/Tokyo' => 'Asia/Tokyo',
  'Asia/Amman' => 'Asia/Amman',
  'Asia/Almaty' => 'Asia/Almaty',
  'Asia/Qyzylorda' => 'Asia/Qyzylorda',
  'Asia/Aqtobe' => 'Asia/Aqtobe',
  'Asia/Aqtau' => 'Asia/Aqtau',
  'Asia/Oral' => 'Asia/Oral',
  'Asia/Bishkek' => 'Asia/Bishkek',
  'Asia/Seoul' => 'Asia/Seoul',
  'Asia/Pyongyang' => 'Asia/Pyongyang',
  'Asia/Kuwait' => 'Asia/Kuwait',
  'Asia/Vientiane' => 'Asia/Vientiane',
  'Asia/Beirut' => 'Asia/Beirut',
  'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
  'Asia/Kuching' => 'Asia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Asia/Hovd',
  'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asia/Choibalsan',
  'Asia/Katmandu' => 'Asia/Katmandu',
  'Asia/Muscat' => 'Asia/Muscat',
  'Asia/Karachi' => 'Asia/Karachi',
  'Asia/Gaza' => 'Asia/Gaza',
  'Asia/Manila' => 'Asia/Manila',
  'Asia/Qatar' => 'Asia/Qatar',
  'Asia/Riyadh' => 'Asia/Riyadh',
  'Asia/Singapore' => 'Asia/Singapore',
  'Asia/Colombo' => 'Asia/Colombo',
  'Asia/Damascus' => 'Asia/Damascus',
  'Asia/Dushanbe' => 'Asia/Dushanbe',
  'Asia/Bangkok' => 'Asia/Bangkok',
  'Asia/Ashgabat' => 'Asia/Ashgabat',
  'Asia/Dubai' => 'Asia/Dubai',
  'Asia/Samarkand' => 'Asia/Samarkand',
  'Asia/Tashkent' => 'Asia/Tashkent',
  'Asia/Saigon' => 'Asia/Saigon',
  'Asia/Aden' => 'Asia/Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Ponape' => 'Pacific/Ponape',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
  'Asia/Omsk' => 'Asia/Omsk',
  'Asia/Novosibirsk' => 'Asia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asia/Irkutsk',
  'Asia/Yakutsk' => 'Asia/Yakutsk',
  'Asia/Vladivostok' => 'Asia/Vladivostok',
  'Asia/Sakhalin' => 'Asia/Sakhalin',
  'Asia/Magadan' => 'Asia/Magadan',
  'Asia/Kamchatka' => 'Asia/Kamchatka',
  'Asia/Anadyr' => 'Asia/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New_York',
  'America/Chicago' =>'America/Chicago' ,
  'America/North_Dakota/Center' => 'America/North_Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los_Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' =>'America/Nome' ,
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' =>  'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'America/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'America/Kentucky/Monticello' ,
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St_Johns',
  'America/Goose_Bay' => 'America/Goose_Bay' ,
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' =>'America/Glace_Bay' ,
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder_Bay' ,
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy_River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift_Current',
  'America/Edmonton' =>  'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson_Creek',
  'America/Pangnirtung' => 'America/Pangnirtung'  ,
  'America/Iqaluit' => 'America/Iqaluit' ,
  'America/Coral_Harbour' => 'America/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'America/Rankin_Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge_Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' =>'America/Inuvik' ,
  'America/Whitehorse' => 'America/Whitehorse' ,
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico_City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' =>'America/Nassau' ,
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa_Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo_Domingo',
  'America/El_Salvador' => 'America/El_Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' =>'America/Puerto_Rico' ,
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St_Vincent',
  'America/Grand_Turk' => 'America/Grand_Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La_Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao_Paulo',
  'America/Campo_Grande' => 'America/Campo_Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa_Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio_Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port_of_Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas',
  );

?>
