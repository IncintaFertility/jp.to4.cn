<?php
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function generateSlug($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/[\s-]+/', '-', $text);
    return trim($text, '-');
}

function formatDate($date) {
    return date('F j, Y', strtotime($date));
}

function getPageTitle($title = '') {
    $siteTitle = SITE_NAME;
    return $title ? $title . ' - ' . $siteTitle : $siteTitle;
}

function getCurrentPage() {
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);
    return trim($path, '/');
}

function isActivePage($page) {
    $currentPage = getCurrentPage();
    return $currentPage === $page || (empty($currentPage) && $page === 'home');
}

function renderTemplate($template, $data = []) {
    extract($data);
    ob_start();
    include TEMPLATES_PATH . '/' . $template . '.php';
    return ob_get_clean();
}

function getSetting($key, $default = '') {
    $db = Database::getInstance();
    $result = $db->fetchOne('SELECT setting_value FROM settings WHERE setting_key = ?', array($key));
    return $result ? $result['setting_value'] : $default;
}

function getActiveServices($limit = null) {
    $db = Database::getInstance();
    $sql = 'SELECT * FROM services ORDER BY sort_order ASC, name ASC';
    if ($limit) {
        $sql .= ' LIMIT ' . (int)$limit;
    }
    return $db->fetchAll($sql);
}

function getTeamMembers($active = true) {
    $db = Database::getInstance();
    $sql = 'SELECT * FROM team_members';
    $params = array();
    
    if ($active) {
        $sql .= ' WHERE is_active = 1';
    }
    
    $sql .= ' ORDER BY sort_order ASC, name ASC';
    return $db->fetchAll($sql, $params);
}

function getLocations($active = true) {
    $db = Database::getInstance();
    $sql = 'SELECT * FROM locations';
    $params = array();
    
    if ($active) {
        $sql .= ' WHERE is_active = 1';
    }
    
    $sql .= ' ORDER BY sort_order ASC, name ASC';
    return $db->fetchAll($sql, $params);
}

function getFAQs($category = null) {
    $db = Database::getInstance();
    $sql = 'SELECT * FROM faqs WHERE is_active = 1';
    $params = array();
    
    if ($category) {
        $sql .= ' AND category = ?';
        $params[] = $category;
    }
    
    $sql .= ' ORDER BY sort_order ASC, id ASC';
    return $db->fetchAll($sql, $params);
}

function sendContactEmail($data) {
    $to = SITE_EMAIL;
    $subject = 'New Contact Inquiry - ' . (isset($data['subject']) ? $data['subject'] : 'General Inquiry');
    $message = "New contact form submission:\n\n";
    $message .= "Name: " . $data['name'] . "\n";
    $message .= "Email: " . $data['email'] . "\n";
    if (!empty($data['phone'])) {
        $message .= "Phone: " . $data['phone'] . "\n";
    }
    $message .= "Subject: " . (isset($data['subject']) ? $data['subject'] : 'N/A') . "\n";
    $message .= "Message:\n" . $data['message'] . "\n";
    
    $headers = "From: " . $data['email'] . "\r\n";
    $headers .= "Reply-To: " . $data['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    return mail($to, $subject, $message, $headers);
}