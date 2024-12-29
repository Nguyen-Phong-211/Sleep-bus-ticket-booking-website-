// document.addEventListener('DOMContentLoaded', function() {

//     function initAutocomplete(inputId, resultsId, points) {
//         const input = document.getElementById(inputId);
//         const autocompleteResults = document.getElementById(resultsId);

//         if (!input || !autocompleteResults) return;

//         let debounceTimer;

//         function showAllSuggestions() {
//             autocompleteResults.innerHTML = ''; // Xóa hết các kết quả cũ
//             const fragment = document.createDocumentFragment(); // Tạo DocumentFragment để tối ưu DOM manipulation

//             points.forEach(point => {
//                 const div = document.createElement('div');
//                 div.classList.add('autocomplete-item');
//                 div.textContent = point.departurepoint_name || point.arrivalpoint_name; // Sử dụng tên tương ứng
//                 div.onclick = () => selectSuggestion(point.departurepoint_name || point.arrivalpoint_name); // Chọn đúng gợi ý
//                 fragment.appendChild(div);
//             });

//             autocompleteResults.appendChild(fragment); // Chỉ append một lần vào DOM
//             autocompleteResults.style.display = 'block'; // Hiển thị dropdown
//         }

//         function showFilteredSuggestions(query) {
//             const filteredSuggestions = points.filter(point =>
//                 (point.departurepoint_name || point.arrivalpoint_name).toLowerCase().includes(query.toLowerCase()) // Lọc theo tên điểm
//             );

//             autocompleteResults.innerHTML = ''; // Xóa hết các kết quả cũ
//             const fragment = document.createDocumentFragment(); // Tạo DocumentFragment để tối ưu DOM manipulation

//             filteredSuggestions.forEach(point => {
//                 const div = document.createElement('div');
//                 div.classList.add('autocomplete-item');
//                 div.textContent = point.departurepoint_name || point.arrivalpoint_name; // Sử dụng tên tương ứng
//                 div.onclick = () => selectSuggestion(point.departurepoint_name || point.arrivalpoint_name); // Chọn đúng gợi ý
//                 fragment.appendChild(div);
//             });

//             autocompleteResults.appendChild(fragment); 
//             autocompleteResults.style.display = filteredSuggestions.length > 0 ? 'block' : 'none'; 
//         }

//         function selectSuggestion(suggestion) {
//             input.value = suggestion; 
//             autocompleteResults.style.display = 'none'; 
//         }

//         // Sử dụng Debouncing để tránh việc gọi showFilteredSuggestions quá nhiều lần
//         input.addEventListener('input', () => {
//             clearTimeout(debounceTimer);
//             debounceTimer = setTimeout(() => {
//                 const query = input.value; 
//                 showFilteredSuggestions(query); 
//             }, 300); 
//         });

//         // Lắng nghe sự kiện click vào input để hiển thị tất cả các gợi ý
//         input.addEventListener('focus', () => {
//             showAllSuggestions(); // Hiển thị tất cả gợi ý khi input được focus
//         });

//         // Lắng nghe sự kiện blur để ẩn dropdown khi người dùng click ra ngoài
//         input.addEventListener('blur', () => {
//             setTimeout(() => {
//                 autocompleteResults.style.display = 'none'; // Ẩn dropdown khi mất focus
//             }, 150);
//         });

//         // Lắng nghe sự kiện click ngoài để ẩn dropdown
//         document.addEventListener('click', (e) => {
//             if (!autocompleteResults.contains(e.target) && e.target !== input) {
//                 autocompleteResults.style.display = 'none'; // Ẩn dropdown nếu click ngoài
//             }
//         });
//     }

//     // Khởi tạo autocomplete cho cả hai input
//     initAutocomplete('address-from', 'autocomplete-results-from', departurePoints);
//     initAutocomplete('address-to', 'autocomplete-results-to', arrivalPoints);
// });
