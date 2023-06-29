using System;
using System.Collections.Generic;

class Program
{
    public static void Main()
    {
        Console.Write("Enter your name: ");
        string name = Console.ReadLine();
        Console.WriteLine($"Welcome to SharpPhone {name}!");

        login();
    }

    public static void login()
    {
        int MaxAttempts = 3;
        Console.Write("Enter the password: ");
        string password = Console.ReadLine();

        if (password == "PHONESHARP")
        {
            Console.WriteLine("Wachtwoord is juist!");
        }
        else
        {
            Console.WriteLine("Wachtwoord is onjuist!");
            if (MaxAttempts >= 1)
            {
                login();
                MaxAttempts++;
            }
            Environment.Exit(0);
        }


        {
            Console.WriteLine("Available options:");
            Console.WriteLine("1. Option 1");
            Console.WriteLine("2. Option 2");
            Console.WriteLine("3. Option 3");
            Console.WriteLine("4. Option 4");
            Console.WriteLine("5. Option 5");
            Console.WriteLine("6. Option 6");
            Console.WriteLine("7. Option 7");
            Console.WriteLine("8. Option 8");
            Console.WriteLine("9. Exit");

            bool exitLoop = false;
            while (!exitLoop)
            {
                Console.WriteLine("\nEnter your selection:");

                ConsoleKeyInfo keyInfo = Console.ReadKey(true);

                switch (keyInfo.KeyChar)
                {
                    case '1':
                        Console.WriteLine("\nOption 1 selected");
                        
                        break;
                    case '2':
                        Console.WriteLine("\nOption 2 selected");
                        break;
                    case '3':
                        Console.WriteLine("\nOption 3 selected");
                        break;
                    case '4':
                        Console.WriteLine("\nOption 4 selected");
                        break;
                    case '5':
                        Console.WriteLine("\nOption 5 selected");
                        break;
                    case '6':
                        Console.WriteLine("\nOption 6 selected");
                        break;
                    case '7':
                        Console.WriteLine("\nOption 7 selected");
                        break;
                    case '8':
                        Console.WriteLine("\nOption 8 selected");
                        break;
                    case '9':
                        Console.WriteLine("\nExiting...");
                        exitLoop = true;
                        break;  
                    default:
                        Console.WriteLine("\nInvalid selection, please try again");
                        break;
                }
                
                Console.WriteLine("id = 184735839");
                Console.WriteLine("Merk =  SimSang"); 
                Console.WriteLine("Model = S9 Ultra Pro");
                Console.WriteLine("Capicaty 500GB");
                Console.WriteLine("Price 599$");
                
                Console.WriteLine("Id 1");
                Console.WriteLine("Simsang");
                Console.WriteLine("HF 410");
                Console.WriteLine("16000");
                Console.WriteLine("129.95");

                List<string> smartphones = new List<string>();
                
                smartphones.Add("iPhone");
                smartphones.Add("Samsung Galaxy");
                smartphones.Add("Google Pixel");
                
                for (int i = 0; i < smartphones.Count; i++)
                {
                    Console.WriteLine(smartphones[i]);
                }
                //bvgyc
                Console.WriteLine("Gebruik van een foreach-loop:");
                foreach (string phone in smartphones)
                {
                    Console.WriteLine(phone);
                }

            }

        }
    }
}