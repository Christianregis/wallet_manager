export interface User {
    id: number;
    name: string;
    email: string;
    avatar:string,
    createdAt: Date;
    updatedAt: Date;
}

export interface UserCredentials {
    email: string;
    password: string;
}