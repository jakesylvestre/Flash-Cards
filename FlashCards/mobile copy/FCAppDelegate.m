//
//  FCAppDelegate.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCAppDelegate.h"
#import "FCAddViewController.h"
#import "FCLoginViewController.h"
#import "FCWordsViewController.h"
#import "FCKnowViewController.h"
#import "FCAboutViewController.h"
#import <Parse/Parse.h>

@implementation FCAppDelegate
@synthesize tabBarController, wordManager;

- (BOOL)application:(UIApplication *)application didFinishLaunchingWithOptions:(NSDictionary *)launchOptions
{
    self.window = [[UIWindow alloc] initWithFrame:[[UIScreen mainScreen] bounds]];
    // Override point for customization after application launch.
    
    [Parse setApplicationId:@"h2EjLBKbaTF7rlYj5WbaWlp6Yoe9zMmPSU5Lv1YO"
                  clientKey:@"bNYUFYuyAhvIsX3cs1pY351JOkpzMEIPtSnjsGEy"];
    
    FCLoginViewController *lvc = [[FCLoginViewController alloc] init];
    FCAddViewController *advc = [[FCAddViewController alloc] init];
    FCWordsViewController *wvc = [[FCWordsViewController alloc] init];
    FCKnowViewController *kvc = [[FCKnowViewController alloc] init];
    FCAboutViewController *abvc = [[FCAboutViewController alloc] init];
    wordManager = [[FCWordManager alloc] init];
    [advc setWordManager:wordManager];
    [wvc setWordManager:wordManager];
    [kvc setWordManager:wordManager];
    
    tabBarController = [[UITabBarController alloc]init];
    NSArray *viewControllers = [NSArray arrayWithObjects:lvc, advc, wvc, kvc, abvc, nil];
    [tabBarController setViewControllers:viewControllers];
    [[self window] setRootViewController:tabBarController];
    self.window.backgroundColor = [UIColor whiteColor];
    [self.window makeKeyAndVisible];
    return YES;
}

- (void)applicationWillResignActive:(UIApplication *)application
{
    // Sent when the application is about to move from active to inactive state. This can occur for certain types of temporary interruptions (such as an incoming phone call or SMS message) or when the user quits the application and it begins the transition to the background state.
    // Use this method to pause ongoing tasks, disable timers, and throttle down OpenGL ES frame rates. Games should use this method to pause the game.
}

- (void)applicationDidEnterBackground:(UIApplication *)application
{
    // Use this method to release shared resources, save user data, invalidate timers, and store enough application state information to restore your application to its current state in case it is terminated later. 
    // If your application supports background execution, this method is called instead of applicationWillTerminate: when the user quits.
}

- (void)applicationWillEnterForeground:(UIApplication *)application
{
    // Called as part of the transition from the background to the inactive state; here you can undo many of the changes made on entering the background.
}

- (void)applicationDidBecomeActive:(UIApplication *)application
{
    // Restart any tasks that were paused (or not yet started) while the application was inactive. If the application was previously in the background, optionally refresh the user interface.
}

- (void)applicationWillTerminate:(UIApplication *)application
{
    // Called when the application is about to terminate. Save data if appropriate. See also applicationDidEnterBackground:.
}

@end
