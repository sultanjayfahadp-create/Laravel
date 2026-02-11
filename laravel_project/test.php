<?php
require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Students;

// CRUD Operations
echo "=== Sultan's Amazing Simple Students CRUD ===\n\n";

// CREATE
echo "1. CREATE Operation:\n";
$student = Students::create([
    'name' => 'Alice Johnson',
    'email' => 'alice@gmail.com'
]);
echo "   Created student with ID: {$student->id}\n\n";

// READ
echo "2. READ Operation:\n";
$foundStudent = Students::find($student->id);
echo "   Found: {$foundStudent->name} ({$foundStudent->email})\n\n";

// UPDATE
echo "3. UPDATE Operation:\n";
$foundStudent->update(['name' => 'Alice Smith']);
echo "   Updated name to: {$foundStudent->name}\n\n";

/* DELETE
echo "4. DELETE Operation:\n";
$foundStudent->delete();
echo "   Deleted student\n\n";
*/

// VERIFY
echo "5. VERIFY:\n";
$check = Students::find($student->id);
echo "   Student exists? " . ($check ? 'YES' : 'NO') . "\n";