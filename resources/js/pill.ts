import { Tabs } from "flowbite";
import { TabsOptions, TabsInterface, TabItem } from "flowbite";

// create an array of objects with the id, trigger element (eg. button), and the content element
const tabElements: TabItem[] = [
    {
        id: 'all',
        triggerEl: document.querySelector('#all-tabs'),
        targetEl: document.querySelector('#allTabs')
    },
    {
        id: 'active',
        triggerEl: document.querySelector('#active-tabs'),
        targetEl: document.querySelector('#activeTabs')
    },
    {
        id: 'repost',
        triggerEl: document.querySelector('#repost-tabs'),
        targetEl: document.querySelector('#repostTabs')
    },
    {
        id: 'inactive',
        triggerEl: document.querySelector('#inactive-tabs'),
        targetEl: document.querySelector('#inactiveTabs')
    },
    {
        id: 'archive',
        triggerEl: document.querySelector('#archive-tabs'),
        targetEl: document.querySelector('#archiveTabs')
    }
];

// options with default values
const options: TabsOptions = {
    defaultTabId: 'settings',
    activeClasses: 'text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
    inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
/*     onShow: () => {
        console.log('tab is shown');
    } */
};

/*
* tabElements: array of tab objects
* options: optional
*/
const tabs: TabsInterface = new Tabs(tabElements, options);

// open tab item based on id
tabs.show('all');