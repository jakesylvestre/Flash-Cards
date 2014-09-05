//
//  FCLoginViewController.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCLoginViewController.h"
#import <Parse/Parse.h>

@interface FCLoginViewController ()

@end

@implementation FCLoginViewController

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        UITabBarItem *tbi = [self tabBarItem];
        [tbi setTitle:@"Login"];
        UIImage *i = [UIImage imageNamed:@"spirall.png"];
        [tbi setImage:i];
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (IBAction) login:(id)sender
{
    [PFUser logInWithUsername:[name text]
                     password:@""];
    [self clear];
    
    
    /*PFUser *user = [PFUser currentUser];
    int score = 7;
    [user setObject:[NSNumber numberWithInt:score] forKey:@"Score"];
    NSArray *words = [[NSArray alloc]initWithObjects:@"Oblivion", @"infirmity", @"gratification", nil];
    [user setObject:words forKey:@"Words"];
    [user saveInBackground];*/
}
- (IBAction) logout:(id)sender
{
    [PFUser logOut];
    [self clear];
}
- (IBAction) registerUser:(id)sender
{
    PFUser *user = [[PFUser alloc] init];
    [user setUsername:[name text]];
    [user setPassword:@""];
    [user setEmail:[email text]];
    [user setObject:[phone text] forKey:@"Phone"];
    [user setObject:[teacher text] forKey:@"Teacher"];
    [user setObject:[NSNumber numberWithInt:0] forKey:@"Score"];

    [user signUpInBackgroundWithBlock:^(BOOL succeeded, NSError *error) {
        if (error) {
            NSString *errorString = [[error userInfo] objectForKey:@"error"];
            NSLog(@"%@",errorString);
        }
    }];
    [self clear];
}

- (void) clear
{
    [name setText:@""];
    [teacher setText:@""];
    [phone setText:@""];
    [email setText:@""];
}

@end
