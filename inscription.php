<?php get_header();
/* Template Name: Inscription */
?>

<main>
    <div class="min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <h1 class="h2 mb-1">Inscription</h1>
                                <p class="text-muted">Rejoignez la communauté Basi Unity</p>
                            </div>

                            <form class="registration-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password" required>
                                            <button type="button"
                                                class="btn btn-link position-absolute end-0 top-50 translate-middle-y pe-3"
                                                onclick="togglePassword('password', 'toggleIcon1')">
                                                <i class="bi bi-eye" id="toggleIcon1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="confirmPassword" class="form-label">Confirmer le mot de
                                            passe</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="confirmPassword" required>
                                            <button type="button"
                                                class="btn btn-link position-absolute end-0 top-50 translate-middle-y pe-3"
                                                onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                                                <i class="bi bi-eye" id="toggleIcon2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>

                                <div class="mb-3">
                                    <label for="resume" class="form-label">Biographie</label>
                                    <textarea class="form-control" id="resume" rows="3"
                                        placeholder="Parlez-nous de vous"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="parcours" class="form-label">Votre parcours</label>
                                        <textarea class="form-control" id="parcours" rows="3"
                                            placeholder="Parlez-nous de votre parcours"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="valeurs" class="form-label">Vos valeurs</label>
                                        <textarea class="form-control" id="valeurs" rows="3"
                                            placeholder="Parlez-nous de vos valeurs"></textarea>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="skillInput" class="form-label">Tags</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="skillInput"
                                            placeholder="Exemple : Identité visuelle, Branding, Print Design, ... et appuyez sur Entrée">
                                        <button type="button" class="btn btn-outline-secondary" onclick="addSkill()">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                    <div id="skillsContainer" class="mb-2">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Vos réalisations</label>
                                    <div class="file-upload-area" id="fileUploadArea">
                                        <i class="bi bi-cloud-upload fs-1 text-muted mb-3 d-block"></i>
                                        <p class="mb-2">Glissez-déposez vos fichiers ici ou <strong>cliquez pour
                                                parcourir</strong></p>
                                        <p class="text-muted small mb-0">CV, portfolio, présentation... (PDF, DOC, DOCX,
                                            JPG, PNG - Max 10MB par fichier)</p>
                                        <input type="file" id="fileInput" multiple
                                            accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.ppt,.pptx" style="display: none;">
                                    </div>
                                    <div id="uploadedFiles" class="mt-3">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            J'accepte les <a href="#" class="text-decoration-none">conditions
                                                d'utilisation</a> et la <a href="#"
                                                class="text-decoration-none">politique de confidentialité</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter">
                                        <label class="form-check-label" for="newsletter">
                                            Je souhaite recevoir la newsletter et les actualités de Basi Unity
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mb-3">
                                    Créer mon compte
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    let uploadedFiles = [];
    let skills = [];

    function addSkill() {
        const skillInput = document.getElementById('skillInput');
        const skill = skillInput.value.trim();

        if (skill && !skills.includes(skill)) {
            skills.push(skill);
            updateSkillsDisplay();
            skillInput.value = '';
        }
    }

    function removeSkill(skill) {
        skills = skills.filter(s => s !== skill);
        updateSkillsDisplay();
    }

    function updateSkillsDisplay() {
        const container = document.getElementById('skillsContainer');
        container.innerHTML = skills.map(skill =>
            `<span class="skill-tag">
                    ${skill}
                    <span class="remove-skill" onclick="removeSkill('${skill}')">&times;</span>
                </span>`
        ).join('');
    }

    document.getElementById('skillInput').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            addSkill();
        }
    });

    const fileUploadArea = document.getElementById('fileUploadArea');
    const fileInput = document.getElementById('fileInput');

    fileUploadArea.addEventListener('click', () => {
        fileInput.click();
    });

    fileUploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileUploadArea.classList.add('dragover');
    });

    fileUploadArea.addEventListener('dragleave', () => {
        fileUploadArea.classList.remove('dragover');
    });

    fileUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadArea.classList.remove('dragover');
        handleFiles(e.dataTransfer.files);
    });

    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(file => {
            if (validateFile(file)) {
                uploadedFiles.push(file);
                displayUploadedFile(file);
            }
        });
    }

    function validateFile(file) {
        const maxSize = 10 * 1024 * 1024;
        const allowedTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'image/jpeg',
            'image/jpg',
            'image/png',
            'application/vnd.ms-powerpoint',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation'
        ];

        if (file.size > maxSize) {
            alert(`Le fichier "${file.name}" est trop volumineux. Taille maximum : 100MB`);
            return false;
        }

        if (!allowedTypes.includes(file.type)) {
            alert(`Le type de fichier "${file.name}" n'est pas autorisé.`);
            return false;
        }

        return true;
    }

    function displayUploadedFile(file) {
        const container = document.getElementById('uploadedFiles');
        const fileId = Date.now() + Math.random();

        const fileElement = document.createElement('div');
        fileElement.className = 'uploaded-file';
        fileElement.innerHTML = `
                <div class="file-info">
                    <i class="bi ${getFileIcon(file.type)} file-icon"></i>
                    <div>
                        <div class="fw-medium">${file.name}</div>
                        <small class="text-muted">${formatFileSize(file.size)}</small>
                    </div>
                </div>
                <i class="bi bi-x-circle remove-file" onclick="removeFile(${fileId})"></i>
            `;

        fileElement.dataset.fileId = fileId;
        container.appendChild(fileElement);
    }

    function removeFile(fileId) {
        const fileElement = document.querySelector(`[data-file-id="${fileId}"]`);
        if (fileElement) {
            fileElement.remove();
        }
    }

    function getFileIcon(fileType) {
        if (fileType.includes('pdf')) return 'bi-file-earmark-pdf';
        if (fileType.includes('word') || fileType.includes('document')) return 'bi-file-earmark-word';
        if (fileType.includes('image')) return 'bi-file-earmark-image';
        if (fileType.includes('presentation') || fileType.includes('powerpoint')) return 'bi-file-earmark-slides';
        return 'bi-file-earmark';
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 10240;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.className = 'bi bi-eye-slash';
        } else {
            passwordInput.type = 'password';
            toggleIcon.className = 'bi bi-eye';
        }
    }

    document.querySelector('.registration-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            alert('Les mots de passe ne correspondent pas.');
            return;
        }

        if (password.length < 6) {
            alert('Le mot de passe doit contenir au moins 6 caractères.');
            return;
        }

        if (!document.getElementById('terms').checked) {
            alert('Vous devez accepter les conditions d\'utilisation.');
            return;
        }

        alert('Inscription réussie ! Un email de confirmation vous a été envoyé.');
        window.location.href = 'http://localhost/wordpress2/';
    });
</script>

<?php get_footer(); ?>