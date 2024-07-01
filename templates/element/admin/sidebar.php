    <side-bar base-url="<?=$this->request->getAttribute('base')?>/asgard" title=" Shards Dashboard" 
    :items="[
        {
            title: 'dashboard',
            children: [
                {
                    title: 'Dashboard',
                    icon: 'dashboard',
                    url: '/dashboard'
                },
                {
                    title: 'Admins',
                    icon: 'people',
                    url: '/admins'
                },
                {
                    title: 'Abouts',
                    icon: 'people',
                    url: '/abouts'
                },
                {
                    title: 'Blogs',
                    icon: 'people',
                    url: '/blogs'
                },
                {
                    title: 'Projects',
                    icon: 'people',
                    url: '/projects'
                }
            
            ]
        }
    ]">
    </side-bar>