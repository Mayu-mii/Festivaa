<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Models\PostBlog;

    class UserController extends Controller
    {
        //
        protected $users = [
            [
                "id" => 1,
                "author" => "Liam Martinez",
                "blog_title" => "The Rise of Quantum Computing",
                "blog_content" => "A deep dive into the potential of quantum computing and its future applications.",
                "date_published" => "2024-01-02"
            ],
            [
                "id" => 2,
                "author" => "Sophia Roberts",
                "blog_title" => "Minimalism in Design: Less is More",
                "blog_content" => "Exploring how minimalist design is shaping user interfaces and brand identities.",
                "date_published" => "2024-01-05"
            ],
            [
                "id" => 3,
                "author" => "James Lee",
                "blog_title" => "How to Make Sense of Big Data",
                "blog_content" => "Understanding the importance of big data in decision-making and its real-world applications.",
                "date_published" => "2024-01-07"
            ],
            [
                "id" => 4,
                "author" => "Emily Carter",
                "blog_title" => "The Impact of AI on Project Management",
                "blog_content" => "How AI tools are transforming the way projects are planned and executed.",
                "date_published" => "2024-01-10"
            ],
            [
                "id" => 5,
                "author" => "William Turner",
                "blog_title" => "Sustainability in Marketing",
                "blog_content" => "Why sustainability should be at the forefront of modern marketing strategies.",
                "date_published" => "2024-01-12"
            ],
            [
                "id" => 6,
                "author" => "Olivia Davis",
                "blog_title" => "Investing in a Volatile Market",
                "blog_content" => "Tips for navigating the stock market during uncertain economic conditions.",
                "date_published" => "2024-01-03"
            ],
            [
                "id" => 7,
                "author" => "Benjamin White",
                "blog_title" => "Advanced JavaScript Techniques for Developers",
                "blog_content" => "An overview of cutting-edge JavaScript methods for building efficient web applications.",
                "date_published" => "2024-01-08"
            ],
            [
                "id" => 8,
                "author" => "Charlotte Wilson",
                "blog_title" => "Sales Automation: The Future of Selling",
                "blog_content" => "How automation tools are reshaping sales strategies and increasing productivity.",
                "date_published" => "2024-01-04"
            ],
            [
                "id" => 9,
                "author" => "Noah Brooks",
                "blog_title" => "Creating a Strong Employer Brand",
                "blog_content" => "Strategies to attract top talent by building a compelling employer brand.",
                "date_published" => "2024-01-09"
            ],
            [
                "id" => 10,
                "author" => "Mia Clark",
                "blog_title" => "Leadership in a Remote Work Era",
                "blog_content" => "How leadership styles are adapting to the rise of remote and hybrid work environments.",
                "date_published" => "2024-01-06"
            ]

        ];

        public function index()
{
    switch (auth()->user()->role) {
        case 'user':
            $blogdate = PostBlog::where('user_id', auth()->id())->paginate(5);
            break;
        case 'admin':
            $blogdate = PostBlog::paginate(5);
            break;
        default:
            return view('student.blog', ['message' => 'You do not have permission to view this page.']);
    }

    return view('student.blog', ['blogdate' => $blogdate]);
}

        public function create()
        {
            return view('student.blog-create');
        }

        public function show($id)
        {
            $user = collect($this->users)->firstWhere('id', $id);

            if (!$user) {
                abort(404, 'User not found');
            }

            return view('student.blog-show', ['user' => $user]);
        }

        public function showBlog($id)
        {
            $postBlog = PostBlog::find($id);

            if (!$postBlog) {
                abort(404, 'Post not found');
            }

            return view('student.blog-show', ['postBlog' => $postBlog]);
        }

        public function store(Request $request)
        {
            $data = $request->validate([
               'author' => 'required',
               'blog_title' => 'required',
               'blog_content' => 'required',
               ]);

               $data['id'] = count($this->users) + 1;
               $data['date_published'] = now()->toDateString();

               $this->users[] = $data;

               return view('student.blog', ['users' => $this->users]);
        }


        public function edit($id)
        {
            $user = collect($this->users)->firstWhere('id', $id);

            if (!$user) {
                abort(404, 'User not found');
            }

            return view('student.blog-edit', ['user' => $user]);
        }

        public function update(Request $request, $id)
        {
            $data = $request->validate([
                'author' => 'required',
                'blog_title' => 'required',
                'blog_content' => 'required',
            ]);

            $user = collect($this->users)->firstWhere('id', $id);

            if (!$user) {
                abort(404, 'User not found');
            }

            $user['author'] = $data['author'];
            $user['blog_title'] = $data['blog_title'];
            $user['blog_content'] = $data['blog_content'];

            return view('student.blog-show', ['user' => $user]);
        }

        public function editBlog($id){
            $postBlog = PostBlog::find($id);

            if (!$postBlog) {
                abort(404, 'Post not found');
            }

            return view('student.blog-edit', ['postBlog' => $postBlog]);

        }

        public function updateBlog(Request $request, $id)
        {
            $data = $request->validate([
                'author' => 'required',
                'blog_title' => 'required',
                'blog_content' => 'required',
            ]);

            $postBlog = PostBlog::find($id);

            if (!$postBlog) {
                abort(404, 'Post not found');
            }

            $postBlog->author = $data['author'];
            $postBlog->blog_title = $data['blog_title'];
            $postBlog->blog_content = $data['blog_content'];
            $postBlog->save();

            return redirect('/blogs');
        }


        public function userCreate()
        {
            return view('student.blog-user-create');
        }
    }