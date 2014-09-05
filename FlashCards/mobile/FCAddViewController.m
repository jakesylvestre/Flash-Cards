//
//  FCAddViewController.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCAddViewController.h"
#import <Parse/Parse.h>

@interface FCAddViewController ()

@end

@implementation FCAddViewController
@synthesize wordManager;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        UITabBarItem *tbi = [self tabBarItem];
        [tbi setTitle:@"Add"];
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


- (IBAction) add:(id)sender
{
    [wordManager addWord:[word text]
             WithSentence:[sentence text]
                   AndDef:[def text]];
    [self clear:self];
}
- (IBAction) clear:(id)sender
{
    [word setText:@""];
    [def setText:@""];
    [sentence setText:@""];
    
    NSString *urlAddress = @"https://www.google.com";
    urlAddress = [urlAddress stringByAppendingString:[word text]];
    NSURL *url = [NSURL URLWithString:urlAddress];
	//URL Requst Object
	NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
	
	//Load the request in the UIWebView.
	[webView loadRequest:requestObj];

}
- (IBAction) hint:(id)sender
{
    NSString *urlAddress;
    if([[word text] isEqualToString:@""])
    {
        urlAddress = @"https://www.google.com";
    }
    else
    {
        urlAddress = @"https://www.google.com/search?rlz=1C1CHFA_en__487__487&sugexp=chrome,mod=2&sourceid=chrome&ie=UTF-8&q=define+";
        NSString *searchPhrase = [word text];
        NSArray *searchWords = [searchPhrase componentsSeparatedByString:@" "];
        NSString *searchStr = searchWords[0];
        for( int i =1; i < searchWords.count ; i++)
        {
            searchStr = [searchStr stringByAppendingString:@"+"];
            searchStr = [searchStr stringByAppendingString:searchWords[i]];
        }
            
        urlAddress = [urlAddress stringByAppendingString:searchStr];
    }

	//Create a URL object.
	NSURL *url = [NSURL URLWithString:urlAddress];
	
	//URL Requst Object
	NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
	
	//Load the request in the UIWebView.
	[webView loadRequest:requestObj];
}
@end
