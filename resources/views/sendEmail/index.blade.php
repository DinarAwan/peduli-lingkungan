{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kirim email</title>
</head>
<body>
    <form method="POST" action="/kirim">
        @csrf
    
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required><br>
    
        <label for="body">Isi Pesan:</label><br>
        <textarea name="body" id="body" rows="5" required></textarea><br><br>
    
        <table>
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td><input type="checkbox" name="emails[]" value="{{ $item->email }}"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <button type="submit">Kirim</button>
    </form>
    
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Email</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            animation: backgroundShift 10s ease-in-out infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
            50% { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transform: translateY(20px);
            animation: slideUp 0.8s ease-out forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(45deg, #4facfe 0%, #00f2fe 100%);
            padding: 30px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .form-container {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 1.1rem;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        input[type="text"]:focus, textarea:focus {
            outline: none;
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
            background: white;
            transform: translateY(-2px);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Custom Select Styles */
        .select-container {
            position: relative;
        }

        .select-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            background: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .select-input:focus {
            outline: none;
            border-color: #4facfe;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
            background: white;
        }

        .select-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 2px solid #4facfe;
            border-top: none;
            border-radius: 0 0 10px 10px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .select-dropdown.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .select-option {
            padding: 12px 15px;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.2s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .select-option:hover {
            background: linear-gradient(45deg, #4facfe, #00f2fe);
            color: white;
            transform: translateX(5px);
        }

        .select-option.selected {
            background: #e3f2fd;
            color: #1976d2;
            font-weight: 600;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .user-name {
            font-weight: 600;
            margin-bottom: 2px;
        }

        .user-email {
            font-size: 0.9rem;
            color: #666;
        }

        .user-role {
            font-size: 0.8rem;
            background: #e3f2fd;
            color: #1976d2;
            padding: 2px 8px;
            border-radius: 12px;
            margin-left: 10px;
        }

        .selected-users {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .selected-user-tag {
            background: linear-gradient(45deg, #4facfe, #00f2fe);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: tagSlideIn 0.3s ease-out;
        }

        @keyframes tagSlideIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .remove-tag {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: white;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: all 0.2s ease;
        }

        .remove-tag:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: scale(1.1);
        }

        .submit-btn {
            background: linear-gradient(45deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
            padding: 18px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: block;
            margin: 30px auto 0;
            min-width: 200px;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s ease;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(79, 172, 254, 0.4);
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        /* Scrollbar Styles */
        .select-dropdown::-webkit-scrollbar {
            width: 6px;
        }

        .select-dropdown::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .select-dropdown::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #4facfe, #00f2fe);
            border-radius: 3px;
        }

        .select-dropdown::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #00f2fe, #4facfe);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 15px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Kirim Email</h1>
            <p>Kirim email ke pengguna terpilih dengan mudah</p>
        </div>
        
        <div class="form-container">
            <form method="POST" action="/kirim">
                @csrf 
                
                <div class="form-group">
                    <label for="subject">📝 Subject Email:</label>
                    <input type="text" name="subject" id="subject" placeholder="Masukkan subject email..." required>
                </div>
                
                <div class="form-group">
                    <label for="body">✍️ Isi Pesan:</label>
                    <textarea name="body" id="body" rows="5" placeholder="Tulis pesan email Anda di sini..." required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="users">👥 Pilih Penerima:</label>
                    <div class="select-container">
                        <input type="text" class="select-input" id="users" placeholder="Cari dan pilih pengguna...">
                        <div class="select-dropdown" id="userDropdown">
                            @foreach ($user as $item)
                            <div class="select-option user-option" 
                                 data-name="{{ $item->name }}" 
                                 data-email="{{ $item->email }}" 
                                 data-role="{{ $item->role }}">
                                <div class="user-info">
                                    <div class="user-name">{{ $item->name }}</div>
                                    <div class="user-email">{{ $item->email }}</div>
                                </div>
                                <div class="user-role">{{ $item->role }}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="selected-users" id="selectedUsers">
                            <!-- Selected user tags will appear here -->
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">
                    🚀 Kirim Email
                </button>
            </form>
        </div>
    </div>

    <script>
        // Get users from PHP data rendered in HTML
        const userElements = document.querySelectorAll('.user-option');
        const users = Array.from(userElements).map(element => ({
            name: element.dataset.name,
            email: element.dataset.email,
            role: element.dataset.role
        }));

        let selectedUsers = [];
        let filteredUsers = [...users];

        const selectInput = document.getElementById('users');
        const dropdown = document.getElementById('userDropdown');
        const selectedUsersContainer = document.getElementById('selectedUsers');

        // Initialize dropdown
        function initializeDropdown() {
            setupEventListeners();
            
            selectInput.addEventListener('click', toggleDropdown);
            selectInput.addEventListener('input', handleSearch);
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.select-container')) {
                    closeDropdown();
                }
            });
        }

        function setupEventListeners() {
            userElements.forEach(element => {
                element.addEventListener('click', function() {
                    const user = {
                        name: this.dataset.name,
                        email: this.dataset.email,
                        role: this.dataset.role
                    };
                    selectUser(user);
                });
            });
        }

        function filterDropdownOptions(searchTerm) {
            userElements.forEach(element => {
                const name = element.dataset.name.toLowerCase();
                const email = element.dataset.email.toLowerCase();
                const role = element.dataset.role.toLowerCase();
                const search = searchTerm.toLowerCase();
                
                if (name.includes(search) || email.includes(search) || role.includes(search)) {
                    element.style.display = 'flex';
                } else {
                    element.style.display = 'none';
                }
            });
        }

        function toggleDropdown() {
            const isVisible = dropdown.classList.contains('show');
            if (isVisible) {
                closeDropdown();
            } else {
                openDropdown();
            }
        }

        function openDropdown() {
            dropdown.classList.add('show');
            selectInput.style.borderRadius = '10px 10px 0 0';
        }

        function closeDropdown() {
            dropdown.classList.remove('show');
            selectInput.style.borderRadius = '10px';
            selectInput.value = '';
            // Show all users when closing dropdown
            userElements.forEach(element => {
                element.style.display = 'flex';
            });
        }

        function handleSearch(e) {
            const searchTerm = e.target.value;
            filterDropdownOptions(searchTerm);
            
            if (!dropdown.classList.contains('show')) {
                openDropdown();
            }
        }

        function selectUser(user) {
            // Check if user is already selected
            const userElement = document.querySelector(`[data-email="${user.email}"]`);
            
            if (selectedUsers.some(selected => selected.email === user.email)) {
                // Remove user if already selected
                selectedUsers = selectedUsers.filter(selected => selected.email !== user.email);
                userElement.classList.remove('selected');
            } else {
                // Add user to selection
                selectedUsers.push(user);
                userElement.classList.add('selected');
            }
            
            updateSelectedUsers();
            updateHiddenInputs();
        }

        function updateSelectedUsers() {
            selectedUsersContainer.innerHTML = '';
            
            selectedUsers.forEach(user => {
                const tag = document.createElement('div');
                tag.className = 'selected-user-tag';
                tag.innerHTML = `
                    <span>${user.name}</span>
                    <button type="button" class="remove-tag" onclick="removeUser('${user.email}')">×</button>
                `;
                selectedUsersContainer.appendChild(tag);
            });
            
            // Update placeholder text
            if (selectedUsers.length > 0) {
                selectInput.placeholder = `${selectedUsers.length} pengguna dipilih`;
            } else {
                selectInput.placeholder = 'Cari dan pilih pengguna...';
            }
        }

        function removeUser(email) {
            selectedUsers = selectedUsers.filter(user => user.email !== email);
            const userElement = document.querySelector(`[data-email="${email}"]`);
            if (userElement) {
                userElement.classList.remove('selected');
            }
            updateSelectedUsers();
            updateHiddenInputs();
        }

        function updateHiddenInputs() {
            // Remove existing hidden inputs
            const existingInputs = document.querySelectorAll('input[name="emails[]"]');
            existingInputs.forEach(input => input.remove());
            
            // Add new hidden inputs for selected users
            const form = document.querySelector('form');
            selectedUsers.forEach(user => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'emails[]';
                input.value = user.email;
                form.appendChild(input);
            });
        }

        // Form submission validation
        document.querySelector('form').addEventListener('submit', function(e) {
            if (selectedUsers.length === 0) {
                e.preventDefault();
                alert('Harap pilih minimal satu penerima email!');
                return false;
            }
        });

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', initializeDropdown);

        // Add some interactive animations
        document.querySelectorAll('input, textarea').forEach(element => {
            element.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            element.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
