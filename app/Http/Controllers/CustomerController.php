<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /** @var CustomerRepositoryInterface */
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();

        return $customers;
    }

    public function show($customerId)
    {
        $customer = $this->customerRepository->findById($customerId);

        return $customer;
    }

    public function update($customerId)
    {
        $this->customerRepository->update($customerId);

        return redirect(sprintf('/customers/%d', $customerId ));
    }
}
