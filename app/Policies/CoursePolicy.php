<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    public function view(User $user)
    {
        return $user->can('view course');
    }

    public function create(User $user)
    {
        return $user->can('create course');
    }

    public function update(User $user, Course $course)
    {
        return $user->can('edit course');
    }

    public function delete(User $user, Course $course)
    {
        return $user->can('delete course');
    }
}
