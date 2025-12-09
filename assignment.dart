import 'package:flutter/material.dart';


class WhatsAppClone extends StatelessWidget {
  const WhatsAppClone({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'WhatsApp Clone',
      debugShowCheckedModeBanner: false,
      theme: ThemeData.dark().copyWith(
        // WhatsApp's signature colors
        primaryColor: const Color(0xFF075E54),
        scaffoldBackgroundColor: const Color(0xFF121B22),
        appBarTheme: const AppBarTheme(
          color: Color(0xFF1F2C34),
          elevation: 0.3,
          titleTextStyle: TextStyle(
            color: Colors.grey,
            fontSize: 22,
            fontWeight: FontWeight.w600,
          ),
        ),
        bottomNavigationBarTheme: const BottomNavigationBarThemeData(
          backgroundColor: Color(0xFF1F2C34),
          selectedItemColor: Color(0xFF53BDEB),
          unselectedItemColor: Color(0xFF8696A0),
          selectedLabelStyle: TextStyle(fontSize: 12),
          unselectedLabelStyle: TextStyle(fontSize: 12),
        ),
        textTheme: const TextTheme(
          bodyLarge: TextStyle(color: Colors.white),
          bodyMedium: TextStyle(color: Colors.white),
        ),
      ),
      home: const MainScreen(),
    );
  }
}

class MainScreen extends StatefulWidget {
  const MainScreen({Key? key}) : super(key: key);

  @override
  State<MainScreen> createState() => _MainScreenState();
}

class _MainScreenState extends State<MainScreen> {
  int _currentIndex = 0; // To track the selected tab in BottomNavigationBar

  final List<Widget> _screens = [
    const ChatListScreen(),
    const StatusScreen(),
    const CommunitiesScreen(),
    const CallsScreen(),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: _screens[_currentIndex],
      bottomNavigationBar: BottomNavigationBar(
        type: BottomNavigationBarType.fixed, // To show all labels
        currentIndex: _currentIndex,
        onTap: (index) {
          setState(() {
            _currentIndex = index;
          });
        },
        items: const [
          BottomNavigationBarItem(
            icon: Icon(Icons.chat),
            label: 'CHATS',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.circle_outlined),
            label: 'STATUS',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.people_alt_outlined),
            label: 'COMMUNITIES',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.call_outlined),
            label: 'CALLS',
          ),
        ],
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {
          // Add new chat logic
        },
        backgroundColor: const Color(0xFF00A884),
        child: Icon(
          _currentIndex == 0 ? Icons.message : Icons.camera_alt, // Different icon for different tabs
          color: Colors.white,
        ),
      ),
    );
  }
}

// --- Screen Widgets ---

class ChatListScreen extends StatefulWidget {
  const ChatListScreen({Key? key}) : super(key: key);

  @override
  State<ChatListScreen> createState() => _ChatListScreenState();
}

class _ChatListScreenState extends State<ChatListScreen> {
  // Sample data for filter chips
  final List<String> _chatFilters = ["All", "Unread 9", "Favourites", "Groups"];
  int _selectedFilterIndex = 0;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('WhatsApp'),
        actions: [
          IconButton(icon: const Icon(Icons.camera_alt_outlined), onPressed: () {}),
          IconButton(icon: const Icon(Icons.search), onPressed: () {}),
          PopupMenuButton<String>(
            icon: const Icon(Icons.more_vert),
            onSelected: (value) {},
            itemBuilder: (BuildContext context) {
              return ['New group', 'New broadcast', 'Linked devices', 'Starred messages', 'Payments', 'Settings']
                  .map((String choice) {
                return PopupMenuItem<String>(value: choice, child: Text(choice));
              }).toList();
            },
          ),
        ],
      ),
      body: Column(
        children: [
          // Filter Chips Section
          Container(
            padding: const EdgeInsets.symmetric(vertical: 8.0, horizontal: 16.0),
            child: SingleChildScrollView(
              scrollDirection: Axis.horizontal,
              child: Row(
                children: List.generate(_chatFilters.length, (index) {
                  return Padding(
                    padding: const EdgeInsets.only(right: 8.0),
                    child: ChoiceChip(
                      label: Text(_chatFilters[index]),
                      selected: _selectedFilterIndex == index,
                      onSelected: (isSelected) {
                        setState(() {
                          _selectedFilterIndex = index;
                        });
                        // Add logic to filter the chat list based on the selection
                      },
                      backgroundColor: const Color(0xFF2A3942),
                      selectedColor: const Color(0xFF3B4A54),
                      labelStyle: TextStyle(
                        color: _selectedFilterIndex == index ? const Color(0xFF53BDEB) : const Color(0xFF8696A0),
                      ),
                    ),
                  );
                }),
              ),
            ),
          ),
          // Chat List Section
          Expanded(
            child: ListView.builder(
              itemCount: chatList.length,
              itemBuilder: (context, index) {
                final chat = chatList[index];
                return ListTile(
                  leading: CircleAvatar(
                    backgroundColor: Colors.grey[600],
                    backgroundImage: chat['avatar'] != null ? NetworkImage(chat['avatar']) : null,
                    child: chat['avatar'] == null
                        ? Text(
                            chat['name'][0],
                            style: const TextStyle(color: Colors.white, fontWeight: FontWeight.bold),
                          )
                        : null,
                  ),
                  title: Text(
                    chat['name'],
                    style: const TextStyle(fontWeight: FontWeight.w500, color: Colors.white),
                  ),
                  subtitle: Text(
                    chat['message'],
                    maxLines: 1,
                    overflow: TextOverflow.ellipsis,
                    style: const TextStyle(color: Color(0xFF8696A0)),
                  ),
                  trailing: Column(
                    crossAxisAlignment: CrossAxisAlignment.end,
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Text(
                        chat['time'],
                        style: const TextStyle(color: Color(0xFF8696A0), fontSize: 12),
                      ),
                      const SizedBox(height: 4),
                      if (chat['unread'] > 0)
                        Container(
                          padding: const EdgeInsets.all(3),
                          decoration: BoxDecoration(
                            color: const Color(0xFF53BDEB),
                            borderRadius: BorderRadius.circular(10),
                          ),
                          constraints: const BoxConstraints(minWidth: 18, minHeight: 18),
                          child: Text(
                            '${chat['unread']}',
                            style: const TextStyle(color: Colors.white, fontSize: 11),
                            textAlign: TextAlign.center,
                          ),
                        ),
                    ],
                  ),
                  onTap: () {
                    // Navigate to chat screen
                  },
                );
              },
            ),
          ),
        ],
      ),
    );
  }
}

// Placeholder widgets for other tabs
class StatusScreen extends StatelessWidget {
  const StatusScreen({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) => const Center(child: Text("Status Screen", style: TextStyle(color: Colors.white)));
}

class CommunitiesScreen extends StatelessWidget {
  const CommunitiesScreen({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) => const Center(child: Text("Communities Screen", style: TextStyle(color: Colors.white)));
}

class CallsScreen extends StatelessWidget {
  const CallsScreen({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) => const Center(child: Text("Calls Screen", style: TextStyle(color: Colors.white)));
}


// Sample chat data (remains the same)
final List<Map<String, dynamic>> chatList = [
  {'name': 'Du\'ale Mohamed', 'message': 'Hello, how are you?', 'time': 'Yesterday', 'unread': 0, 'avatar': null},
  {'name': '+252 61 2134191', 'message': 'Thanks for the information', 'time': 'Yesterday', 'unread': 2, 'avatar': null},
  {'name': 'Ahmed Hassan', 'message': 'See you tomorrow', 'time': 'Monday', 'unread': 0, 'avatar': null},
  {'name': 'Family Group', 'message': 'Mom: Don\'t forget dinner tonight', 'time': 'Monday', 'unread': 5, 'avatar': null},
  {'name': 'Work Team', 'message': 'John: The meeting has been rescheduled', 'time': 'Sunday', 'unread': 0, 'avatar': null},
];

