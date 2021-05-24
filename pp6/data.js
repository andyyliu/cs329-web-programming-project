var defaultThreads = [{
        id: 1,
        title: "Daily Wellness Discussion April 30,2021",
        author: "Andy",
        date: "4/30/2021, 12:00:00 AM",
        content: "Thread content",
        comments: [{
                author: "Kurt",
                date: Date.now(),
                content: "Joshua Holtz once said: \"Wellness is a connection of paths: knowledge and action.\""
            },
            {
                author: "Andy",
                date: Date.now(),
                content: "I like the quote."
            }
        ]
    },

    {
        id: 2,
        title: "Daily Wellness Discussion April 29,2021",
        author: "Tina",
        date: "4/29/2021, 12:00:00 AM",
        content: "Thread content 2",
        comments: [{
                author: "Kurt",
                date: Date.now(),
                content: "What if we connected this to a database?"
            },
            {
                author: "Andy",
                date: Date.now(),
                content: "Thats probably a good idea."
            }
        ]
    },


    {
        id: 3,
        title: "Future Website Suggestions",
        author: "Andy",
        date: "4/28/2021, 5:47:33 PM",
        content: "Thread content",
        comments: [{
                author: "April",
                date: Date.now(),
                content: "I think it looks great!"
            },
            {
                author: "Andy",
                date: Date.now(),
                content: "Thank you for your feedback, we'll keep working on improvements so let us know."
            }
        ]
    },

    {
        id: 4,
        title: "Future Media Content Suggestions",
        author: "Andy",
        date: "4/28/2021, 5:23:54 PM",
        content: "Thread content",
        comments: [{
                author: "Kurt",
                date: Date.now(),
                content: "what about some more yoga videos?"
            },
            {
                author: "Tina",
                date: Date.now(),
                content: "Thats a great idea!"
            }
        ]
    },

    {
        id: 5,
        title: "Start Here",
        author: "Kurt",
        date: "4/28/2021, 1:14:25 PM",
        content: "Thread content",
        comments: [{
                author: "Kurt",
                date: "4/28/2021, 1:14:25 PM",
                content: "Check out our Calendar section for our daily journals"
            },
            {
                author: "Andy",
                date: "4/28/2021, 2:02:42 PM",
                content: "I'll go check that out now!"
            }
        ]
    }



]

var threads = defaultThreads
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}