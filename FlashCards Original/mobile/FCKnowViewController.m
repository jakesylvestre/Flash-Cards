//
//  FCKnowViewController.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCKnowViewController.h"

@interface FCKnowViewController ()

@end

@implementation FCKnowViewController
@synthesize wordManager;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        if (self) {
            UITabBarItem *tbi = [self tabBarItem];
            [tbi setTitle:@"iKnow"];
            UIImage *i = [UIImage imageNamed:@"spirall.png"];
            [tbi setImage:i];
        }
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
    //[table setScrollEnabled:TRUE];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
